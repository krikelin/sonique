<div class="airplays index">
	<h2><?php echo __('Airplays'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('record_id'); ?></th>
			<th><?php echo $this->Paginator->sort('time'); ?></th>
			<th><?php echo $this->Paginator->sort('submission_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($airplays as $airplay): ?>
	<tr>
		<td><?php echo h($airplay['Airplay']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($airplay['Station']['title'], array('controller' => 'stations', 'action' => 'view', $airplay['Station']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($airplay['Record']['id'], array('controller' => 'records', 'action' => 'view', $airplay['Record']['id'])); ?>
		</td>
		<td><?php echo h($airplay['Airplay']['time']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($airplay['Submission']['title'], array('controller' => 'submissions', 'action' => 'view', $airplay['Submission']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $airplay['Airplay']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $airplay['Airplay']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $airplay['Airplay']['id']), null, __('Are you sure you want to delete # %s?', $airplay['Airplay']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Airplay'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
