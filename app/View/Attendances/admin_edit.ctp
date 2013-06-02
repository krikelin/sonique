<div class="attendances form">
<?php echo $this->Form->create('Attendance'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Attendance'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('lession_id');
		echo $this->Form->input('state');
		echo $this->Form->input('notes');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Attendance.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Attendance.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lessions'), array('controller' => 'lessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lession'), array('controller' => 'lessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
