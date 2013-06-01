<div class="courseClassUsers form">
<?php echo $this->Form->create('CourseClassUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Course Class User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('course_class_id');
		echo $this->Form->input('course_id');
		echo $this->Form->input('mark_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CourseClassUser.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CourseClassUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Course Class Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Classes'), array('controller' => 'course_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Class'), array('controller' => 'course_classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
	</ul>
</div>
