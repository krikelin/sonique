
<!DOCTYPE html>
<html>
	<head>
		<style>
		.lession{
			border: 1px solid black;
			background: #EEEEEE;
			position: absolute;
		}

		</style>
	</head>
	<body>
			<?php $start = 480 + 540; // Starts at eight o clock and ends on nine?>
			<?php for($i = 8; $i < 21; $i++): ?>

			<div class="timemarker" style="position: absolute; left: 0px; width:5%; top: <?php echo round((( ($i - 8) * 60) / (1380 -$start)) * 100) ?>%">
				<?php echo $i.":00"?>
			</div>
		<?php endfor;?>
		<?php $i = 0; ?>
			
			<?php foreach($weekdays as $weekday):?>

			<?php foreach($weekday as $lession):?>
			<?php try { ?>
			<div class="lession" style="left:<?php echo 5 * 1 * $i + 5?>%; width:10%; top: <?php echo round(((date('h', strtotime($lession['lessions']['time'])) * date('m', strtotime($lession['lessions']['time']))) / (1380 - $start)) * 100) ?>%; height: <?php echo round((date($lession['lessions']['duration']) / (1380 - $start)* 100))?>%"><?php echo $lession['courses']['title']?></div>
				
				<?php } catch (Exception $e) {}?>
			<?php endforeach;?>
			<?php $i++ ?>
			<?php endforeach;?>
<?php die("");?>
	</body>

</html>