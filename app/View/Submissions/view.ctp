<div class="submissions view">
<h2><?php  echo __('Submission'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['User']['username'], array('controller' => 'users', 'action' => 'view', $submission['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['Station']['title'], array('controller' => 'stations', 'action' => 'view', $submission['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['Record']['version'], array('controller' => 'records', 'action' => 'view', $submission['Record']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Submitted'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['date_submitted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submission Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['SubmissionStatus']['title'], array('controller' => 'submission_statuses', 'action' => 'view', $submission['SubmissionStatus']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submission'), array('action' => 'edit', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submission'), array('action' => 'delete', $submission['Submission']['id']), null, __('Are you sure you want to delete # %s?', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Airplays'); ?></h3>
	<?php if (!empty($submission['Airplay'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Station Id'); ?></th>
		<th><?php echo __('Record Id'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Submission Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($submission['Airplay'] as $airplay): ?>
		<tr>
			<td><?php echo $airplay['id']; ?></td>
			<td><?php echo $airplay['station_id']; ?></td>
			<td><?php echo $airplay['record_id']; ?></td>
			<td><?php echo $airplay['time']; ?></td>
			<td><?php echo $airplay['submission_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'airplays', 'action' => 'view', $airplay['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'airplays', 'action' => 'edit', $airplay['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'airplays', 'action' => 'delete', $airplay['id']), null, __('Are you sure you want to delete # %s?', $airplay['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Airplay'), array('controller' => 'airplays', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
