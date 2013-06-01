<?php
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
			
	
			<?php foreach($weekday as $lession) {?>
			<?php $hour = date('H', strtotime($lession['lessions']['time']));
				$minute = date('i', strtotime($lession['lessions']['time']));
				$minutes = (($hour * 60) + $minute);
			
				$dayMinutes = $count_hours * 60;
				debug($minutes);
				$top = ($minutes - (480)) / $dayMinutes;

				$top = $top * 100;
				try {
				?>
			<div class="lession" style="left:-1px; width:100%; top: <?php echo $top  ?>%; height: <?php echo round((date($lession['lessions']['duration']) / (1380 - $start))* 100)?>%"><b><?php echo date('H:i', strtotime($lession['lessions']['time']))?></b><br /><?php echo $lession['courses']['title']?><br />
				<?php echo $lession['halls']['title']?><br />
				<?php echo $lession['tutors']['username']?>
			</div>
				
				<?php } catch (Exception $e) {}?>
			<?php  }?>
			<?php $i++ ?>
		</div>
			<?php }?>