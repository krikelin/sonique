<div class="submissionStatuses view">
<h2><?php  echo __('Submission Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($submissionStatus['SubmissionStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($submissionStatus['SubmissionStatus']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submission Status'), array('action' => 'edit', $submissionStatus['SubmissionStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submission Status'), array('action' => 'delete', $submissionStatus['SubmissionStatus']['id']), null, __('Are you sure you want to delete # %s?', $submissionStatus['SubmissionStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Submission Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Submissions'); ?></h3>
	<?php if (!empty($submissionStatus['Submission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Station Id'); ?></th>
		<th><?php echo __('Record Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th><?php echo __('Date Submitted'); ?></th>
		<th><?php echo __('Submission Status Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($submissionStatus['Submission'] as $submission): ?>
		<tr>
			<td><?php echo $submission['id']; ?></td>
			<td><?php echo $submission['title']; ?></td>
			<td><?php echo $submission['text']; ?></td>
			<td><?php echo $submission['user_id']; ?></td>
			<td><?php echo $submission['station_id']; ?></td>
			<td><?php echo $submission['record_id']; ?></td>
			<td><?php echo $submission['created']; ?></td>
			<td><?php echo $submission['updated']; ?></td>
			<td><?php echo $submission['date_submitted']; ?></td>
			<td><?php echo $submission['submission_status_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'submissions', 'action' => 'view', $submission['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'submissions', 'action' => 'edit', $submission['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'submissions', 'action' => 'delete', $submission['id']), null, __('Are you sure you want to delete # %s?', $submission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
