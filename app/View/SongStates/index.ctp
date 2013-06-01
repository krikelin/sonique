<div class="songStates index">
	<h2><?php echo __('Song States'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('song_id'); ?></th>
			<th><?php echo $this->Paginator->sort('play_count'); ?></th>
			<th><?php echo $this->Paginator->sort('new_plays'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($songStates as $songState): ?>
	<tr>
		<td><?php echo h($songState['SongState']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($songState['Song']['title'], array('controller' => 'songs', 'action' => 'view', $songState['Song']['id'])); ?>
		</td>
		<td><?php echo h($songState['SongState']['play_count']); ?>&nbsp;</td>
		<td><?php echo h($songState['SongState']['new_plays']); ?>&nbsp;</td>
		<td><?php echo h($songState['SongState']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $songState['SongState']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $songState['SongState']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $songState['SongState']['id']), null, __('Are you sure you want to delete # %s?', $songState['SongState']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Song State'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Songs'), array('controller' => 'songs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song'), array('controller' => 'songs', 'action' => 'add')); ?> </li>
	</ul>
</div>
