<div class="qis form">
<?php echo $this->Form->create('Qi'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Qi'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('time');
		echo $this->Form->input('description');
		echo $this->Form->input('balance');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Qi.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Qi.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Qis'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
