<div class="recordStates form">
<?php echo $this->Form->create('RecordState'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Record State'); ?></legend>
	<?php
		echo $this->Form->input('record_id');
		echo $this->Form->input('play_count');
		echo $this->Form->input('new_plays');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Record States'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>
