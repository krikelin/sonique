<div class="lessions form">
<?php echo $this->Form->create('Lession'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Lession'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('time');
		echo $this->Form->input('course_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('duration');
		echo $this->Form->input('token');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Lession.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Lession.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lessions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
