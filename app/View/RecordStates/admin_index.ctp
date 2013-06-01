<div class="recordStates index">
	<h2><?php echo __('Record States'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('record_id'); ?></th>
			<th><?php echo $this->Paginator->sort('play_count'); ?></th>
			<th><?php echo $this->Paginator->sort('new_plays'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recordStates as $recordState): ?>
	<tr>
		<td><?php echo h($recordState['RecordState']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recordState['Record']['id'], array('controller' => 'records', 'action' => 'view', $recordState['Record']['id'])); ?>
		</td>
		<td><?php echo h($recordState['RecordState']['play_count']); ?>&nbsp;</td>
		<td><?php echo h($recordState['RecordState']['new_plays']); ?>&nbsp;</td>
		<td><?php echo h($recordState['RecordState']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recordState['RecordState']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recordState['RecordState']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recordState['RecordState']['id']), null, __('Are you sure you want to delete # %s?', $recordState['RecordState']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Record State'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>
