<?php
			$prevEntries = array();
$wn = array(__('Monday'), __('Tuesday'), __('Wednesday'), __('Thursday'), __('Friday'), __('Saturday'), __('Sunday'));
?>
			<?php $start = 480 ; // Starts at eight o clock and ends on nine?>
			<?php $end = 540;
			$count_hours = 8;
			?>
			<?php for($i = $count_hours; $i < 16; $i++): ?>

			<div class="timemarker" style="position: absolute; left: 0px; width:5%; top: <?php echo round((( ($i - 8) * 60) / ($count_hours * 60)) * 100)  ?>%">
				<?php echo $i.":00"?>
			</div>
		<?php endfor;?>
		<?php $i = 0; ?>
			
		<?php $i = 0; ?>
		
		<?php foreach($weekdays as $weekday) {?>
		<div class="dayheader" style="text-align: center;position:absolute; left:<?php echo round($i * 10 + 5)?>%; height:20px; width:10%; top: 0px"><?php echo $wn[$i]?></div>
		<div class="day" style="position: absolute; left: <?php echo round($i * 10 + 5)?>%; height:100%; width: 10%; top: 20px">
		

		<?php foreach($weekday as $_lession) {?>
			<?php
			$positions = array($_lession);
			
			$n = 0;
			if(in_array($_lession, $prevEntries)) {
				continue;
			}
			$prevEntries[] = $_lession;
			foreach($weekday as $lession2) {
				if(in_array($lession2, $prevEntries)) {
				
					continue;
				}

				$date1 = strtotime( $_lession['lessions']['time']);
				$date2 = strtotime($lession2['lessions']['time']);
				$first_lession_ends =$date1 + $_lession['lessions']['duration'] * 60;
				$second_lession_ends =$date2 + $lession2['lessions']['duration'] * 60;
		
				if($lession2['lessions']['id'] != $_lession['lessions']['id'] && !in_array($prevEntries, $lession2)) 
				{
					$ab = ($second_lession_ends < $first_lession_ends && $second_lession_ends > $date1);
					$bc = ($date2 < $first_lession_ends && $date2 > $date1);
					$ac = ($first_lession_ends < $second_lession_ends && $$first_lession_ends > $date2);
					$cb = ($date < $second_lession_ends && $date1 > $date2);

					debug(($ac));
					if( 

						$ab || $bc ||
						$ac || $cb
						) {
					
						if($lession2['lessions']['id'] != $_lession['lessions']['id'] ) 
						{
							$positions[] = $lession2;
							
							$prevEntries[] = $lession2;
						}
					}
				}
				$n++;
			}
			
			$count_a = count($positions);
			for($x = 0; $x < $count_a; $x++) {
					$lession = $positions[$x];
					$hour = date('H', strtotime($lession['lessions']['time']));
					
					$minute = date('i', strtotime($lession['lessions']['time']));
					$minutes = (($hour * 60) + $minute);
				
					$dayMinutes = $count_hours * 60;
					// debug($minutes);
					$top = ($minutes - (480)) / $dayMinutes;

					$top = $top * 100;
				
					?>
				<div class="lession" style="position: absolute;left:<?php echo (100 / ($count_a)) * $x -1;?>%; width:<?php echo 100 / ($count_a) + 1 ?>%; top: <?php echo $top  ?>%; height: <?php echo round((date($lession['lessions']['duration']) / (1380 - $start))* 100)?>%"><b><?php echo date('H:i', strtotime($lession['lessions']['time']))?></b><br /><?php echo $lession['courses']['title']?><br />
					<?php echo $this->Html->link($lession['halls']['title'], "/schedule/halls/".$lession['halls']['id']."?week=".$week."&year=".$year."")?><br /><?php echo $x?>
					<?php echo $lession['tutors']['username']?>
				</div>
					
					<?php ?>
				<?php  }?>
			<?php } ?>
			<?php $i++ ?>
		</div>
			<?php 

	}?>