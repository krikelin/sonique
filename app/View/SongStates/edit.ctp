<div class="songStates form">
<?php echo $this->Form->create('SongState'); ?>
	<fieldset>
		<legend><?php echo __('Edit Song State'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('song_id');
		echo $this->Form->input('play_count');
		echo $this->Form->input('new_plays');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SongState.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SongState.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Song States'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Songs'), array('controller' => 'songs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song'), array('controller' => 'songs', 'action' => 'add')); ?> </li>
	</ul>
</div>
