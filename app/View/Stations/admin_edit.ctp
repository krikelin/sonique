<div class="stations form">
<?php echo $this->Form->create('Station'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Station'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('station_type_id');
		echo $this->Form->input('company_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Station.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Station.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Station Types'), array('controller' => 'station_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station Type'), array('controller' => 'station_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Airplays'), array('controller' => 'airplays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Airplay'), array('controller' => 'airplays', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
