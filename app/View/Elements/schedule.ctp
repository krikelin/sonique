<h2>Schema för <?php echo @$entity.','?> vecka <?php echo $week?> <?php echo $year?></h2>
<div style="position:absolute; width: 95%; height: 85%">
<?php
			$prevEntries = array();
$wn = array(__('Monday'), __('Tuesday'), __('Wednesday'), __('Thursday'), __('Friday'), __('Saturday'), __('Sunday'));
?>
			<?php $start = 480 ; // Starts at eight o clock and ends on nine?>
			<?php $end = 540;
			$count_hours = 12;
			$dayMinutes = $count_hours * 60;
			?>
			<?php for($i = 8; $i < 18; $i++): ?>

			<div class="timemarker" style="position: absolute; left: 0px; width:5%; top: <?php echo ((( ($i - 8) * 60) / ($count_hours * 60)) * 100 + 3)  ?>%">
				<?php echo $i.":00"?>
			</div>
		<?php endfor;?>
		<?php $i = 0; ?>
			
		<?php $i = 0; ?>
		
		<?php foreach($weekdays as $weekday) { ?>

		<div class="dayheader" style="text-align: center;position:absolute; left:<?php echo ((1 / 7) * $i * 95  +5 )?>%; height:20px; width: <?php echo ((1 / 7) * 100 - 5)?>%; top: 0px"><?php echo $wn[$i]?></div>
		<div class="day <?php echo $wn[$i]?>" style="position: absolute; left: <?php echo ((1 / 7) * $i * 95  + 5)?>%; height:90%; width: <?php echo ((1 / 7) * 95 )?>%; top: 20px">
		
		<?php for($h = 0; $h < $count_hours; $h++) { 
			$width = 95 * (1 / 7 );

			$min =  ($h * 60);
			$top = ($min ) / $dayMinutes;
			$top = $top * 100;

			?>
		<div class="hmarker" style="top: <?php echo $top?>%; position: absolute; left: 0px; width: 100%"></div>
		<?php } ?>
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
					$ac = ($first_lession_ends < $second_lession_ends && $first_lession_ends > $date2);
					$cb = ($date1 < $second_lession_ends && $date1 > $date2);

					
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
			$dayMinutes = $count_hours * 60;
			for($x = 0; $x < $count_a; $x++) {
					$lession = $positions[$x];
					$hour = date('H', strtotime($lession['lessions']['time']));
					
					$minute = date('i', strtotime($lession['lessions']['time']));
					$minutes = (($hour * 60) + $minute);
				
					
					// debug($minutes);
					$top = ($minutes - (480)) / $dayMinutes;

					$top = $top * 100;
				
					?>
				<div class="lession" style="position: absolute;left:<?php echo (100 / ($count_a)) * $x ;?>%; width:<?php echo ceil((100 / ($count_a)) )  ?>%; top: <?php echo $top  ?>%; height: <?php echo round((date($lession['lessions']['duration']) / (1380 - $start))* 100)?>%"><b><?php echo date('H:i', strtotime($lession['lessions']['time']))?><?php if($lession['lessions']['notes'] != NULL):?>
				<?php echo $this->Html->image("/img/s_info.png", array('style' => 'float: right; padding-right: 10px', 'title' => $lession['lessions']['notes']))?>
				<?php endif;?></b><br />
					
					<?php echo $this->Html->link($lession['courses']['title'], "/schedule/courses/".$lession['courses']['id']."?week=".$week."&year=".$year);?><br />
					<?php echo $this->Html->link($lession['halls']['title'], "/schedule/halls/".$lession['halls']['id']."?week=".$week."&year=".$year."")?><br />
					<?php echo $this->Html->link($lession['tutors']['username'], "/schedule/users/".$lession['tutors']['id']."?week=".$week."&year=".$year)?>
					<p><?php echo $lession['lessions']['notes']?></p>

					<span style="position: absolute; right: 10px;bottom: 0px; float: right;"><?php echo date('H:i', $lession['lessions']['time'] + $lession['lessions']['duration']);?>

				</div>
					
					<?php ?>

				<?php  }?>
				
			<?php } ?>
			<?php
				if(date('N')-1  == $i) {
				
				$width = 95 * (1 / 7 );

				$min =  (date('H') * 60) + date('m') ;
				$top = ($min - (480)) / $dayMinutes;
				$top = $top * 100;

				?>
				<div class="marker" style="width: 100%; z-index: 12;position: absolute; top:<?php echo $top?>%; height: 2px; left: 0px"></div>
				<?php } ?>
		</div>
			<?php $i++ ?>
			<?php 

			
			
	}?>
</div>