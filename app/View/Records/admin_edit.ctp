<div class="records form">
<?php echo $this->Form->create('Record'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Record'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('song_id');
		echo $this->Form->input('version');
		echo $this->Form->input('isrc');
		echo $this->Form->input('user_id');
		echo $this->Form->input('artist_id');
		echo $this->Form->input('youtube_url');
		echo $this->Form->input('plays');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Record.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Record.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Records'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Songs'), array('controller' => 'songs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song'), array('controller' => 'songs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artists'), array('controller' => 'artists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist'), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Airplays'), array('controller' => 'airplays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Airplay'), array('controller' => 'airplays', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Record States'), array('controller' => 'record_states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record State'), array('controller' => 'record_states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
