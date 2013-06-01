<div class="songStates view">
<h2><?php  echo __('Song State'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($songState['SongState']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Song'); ?></dt>
		<dd>
			<?php echo $this->Html->link($songState['Song']['title'], array('controller' => 'songs', 'action' => 'view', $songState['Song']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Play Count'); ?></dt>
		<dd>
			<?php echo h($songState['SongState']['play_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New Plays'); ?></dt>
		<dd>
			<?php echo h($songState['SongState']['new_plays']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($songState['SongState']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Song State'), array('action' => 'edit', $songState['SongState']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Song State'), array('action' => 'delete', $songState['SongState']['id']), null, __('Are you sure you want to delete # %s?', $songState['SongState']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Song States'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song State'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Songs'), array('controller' => 'songs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song'), array('controller' => 'songs', 'action' => 'add')); ?> </li>
	</ul>
</div>
