<fieldset>
	<legend>Filter</legend>

	<div style="float: left">
		<span><a href="?week=<?php echo $week-1?>&amp;year=<?php echo $year?>&amp;<?php echo $classId > 0 ? 'classId='.$classId : ""?>&amp;<?php echo $userId > 0 ? 'userId='.$userId : ''?>&amp;<?php echo $hallId > 0 ? 'hallId='.$hallId : ''?>"><img src="<?php echo Router::Url('/img/b_prevpage.png')?>" /></a> Vecka <?php echo $week?> <?php echo $year?> <a href="?week=<?php echo $week+1?>&amp;year=<?php echo $year?>&amp;<?php echo $classId > 0 ? 'classId='.$classId : ""?>&amp;<?php echo $userId > 0 ? 'userId='.$userId : ''?>&amp;<?php echo $hallId > 0 ? 'hallId='.$hallId : ''?>"><img src="<?php echo Router::Url('/img/b_nextpage.png')?>" /></a>
	</div>
	<div style="float:left"><?php echo $this->Form->input('courseId', array('selected' => $courseId, 'label' => __('Course'), 'id' => 'courseId', 'type' => 'select', 'options' => $courses));?></div>
	
	<div style="float:left"><?php echo $this->Form->input('userId', array('selected' => $userId,'label' => __('User'),'id' => 'userId', 'type' => 'select', 'options' => $users));?></div>
	
	<div style="float:left"><?php echo $this->Form->input('classId', array('selected' => $classId,'label' => __('Class'), 'id' => 'classId', 'type' => 'select', 'options' => $classes));?></div>
	
	<div style="float:left"><?php echo $this->Form->input('hallId', array('selected' => $hallId, 'label' => __('Hall'), 'id' => 'hallId', 'type' => 'select', 'options' => $halls));?></div>
	<script language="javascript">
		function bind(id) {
			document.getElementById(id).addEventListener('change', function () {
				self.location="<?php echo Router::Url('/schedules/')?>?" + id + "=" + document.getElementById(id).options[document.getElementById(id).selectedIndex].value;
			});
		}
		window.addEventListener('load', function () {
			bind('classId');
			bind('userId');
			bind('courseId');
			bind('hallId');
			
		})
	</script>
</fieldset>
<iframe width="100%" height="800" id="schedule" name="schedule" frameborder="0" src="<?php echo $scheduleUrl?>"></iframe>