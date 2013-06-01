<div class="submissions index">
	<h2><?php echo __('Submissions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('text'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('record_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('date_submitted'); ?></th>
			<th><?php echo $this->Paginator->sort('submission_status_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($submissions as $submission): ?>
	<tr>
		<td><?php echo h($submission['Submission']['id']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['title']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['text']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($submission['User']['username'], array('controller' => 'users', 'action' => 'view', $submission['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($submission['Station']['title'], array('controller' => 'stations', 'action' => 'view', $submission['Station']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($submission['Record']['version'], array('controller' => 'records', 'action' => 'view', $submission['Record']['id'])); ?>
		</td>
		<td><?php echo h($submission['Submission']['created']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['updated']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['date_submitted']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($submission['SubmissionStatus']['title'], array('controller' => 'submission_statuses', 'action' => 'view', $submission['SubmissionStatus']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $submission['Submission']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $submission['Submission']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $submission['Submission']['id']), null, __('Are you sure you want to delete # %s?', $submission['Submission']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Submission'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submission Statuses'), array('controller' => 'submission_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission Status'), array('controller' => 'submission_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Airplays'), array('controller' => 'airplays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Airplay'), array('controller' => 'airplays', 'action' => 'add')); ?> </li>
	</ul>
</div>
