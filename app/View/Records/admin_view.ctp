<div class="records view">
<h2><?php  echo __('Record'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($record['Record']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Song'); ?></dt>
		<dd>
			<?php echo $this->Html->link($record['Song']['title'], array('controller' => 'songs', 'action' => 'view', $record['Song']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($record['Record']['version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isrc'); ?></dt>
		<dd>
			<?php echo h($record['Record']['isrc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($record['User']['username'], array('controller' => 'users', 'action' => 'view', $record['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artist'); ?></dt>
		<dd>
			<?php echo $this->Html->link($record['Artist']['title'], array('controller' => 'artists', 'action' => 'view', $record['Artist']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Youtube Url'); ?></dt>
		<dd>
			<?php echo h($record['Record']['youtube_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plays'); ?></dt>
		<dd>
			<?php echo h($record['Record']['plays']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Record'), array('action' => 'edit', $record['Record']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Record'), array('action' => 'delete', $record['Record']['id']), null, __('Are you sure you want to delete # %s?', $record['Record']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Airplays'); ?></h3>
	<?php if (!empty($record['Airplay'])): ?>
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
		foreach ($record['Airplay'] as $airplay): ?>
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
<div class="related">
	<h3><?php echo __('Related Record States'); ?></h3>
	<?php if (!empty($record['RecordState'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Record Id'); ?></th>
		<th><?php echo __('Play Count'); ?></th>
		<th><?php echo __('New Plays'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($record['RecordState'] as $recordState): ?>
		<tr>
			<td><?php echo $recordState['id']; ?></td>
			<td><?php echo $recordState['record_id']; ?></td>
			<td><?php echo $recordState['play_count']; ?></td>
			<td><?php echo $recordState['new_plays']; ?></td>
			<td><?php echo $recordState['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'record_states', 'action' => 'view', $recordState['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'record_states', 'action' => 'edit', $recordState['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'record_states', 'action' => 'delete', $recordState['id']), null, __('Are you sure you want to delete # %s?', $recordState['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Record State'), array('controller' => 'record_states', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Submissions'); ?></h3>
	<?php if (!empty($record['Submission'])): ?>
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
		foreach ($record['Submission'] as $submission): ?>
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
