<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($user['User']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artists'), array('controller' => 'artists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist'), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Classes'), array('controller' => 'course_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Class'), array('controller' => 'course_classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctrine Versions'), array('controller' => 'doctrine_versions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctrine Version'), array('controller' => 'doctrine_versions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctrines'), array('controller' => 'doctrines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctrine'), array('controller' => 'doctrines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Songs'), array('controller' => 'songs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song'), array('controller' => 'songs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Artists'); ?></h3>
	<?php if (!empty($user['Artist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Artist'] as $artist): ?>
		<tr>
			<td><?php echo $artist['id']; ?></td>
			<td><?php echo $artist['title']; ?></td>
			<td><?php echo $artist['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'artists', 'action' => 'view', $artist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'artists', 'action' => 'edit', $artist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'artists', 'action' => 'delete', $artist['id']), null, __('Are you sure you want to delete # %s?', $artist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Artist'), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Course Classes'); ?></h3>
	<?php if (!empty($user['CourseClass'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['CourseClass'] as $courseClass): ?>
		<tr>
			<td><?php echo $courseClass['id']; ?></td>
			<td><?php echo $courseClass['course_id']; ?></td>
			<td><?php echo $courseClass['start_time']; ?></td>
			<td><?php echo $courseClass['end_time']; ?></td>
			<td><?php echo $courseClass['title']; ?></td>
			<td><?php echo $courseClass['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'course_classes', 'action' => 'view', $courseClass['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'course_classes', 'action' => 'edit', $courseClass['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'course_classes', 'action' => 'delete', $courseClass['id']), null, __('Are you sure you want to delete # %s?', $courseClass['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course Class'), array('controller' => 'course_classes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Doctrine Versions'); ?></h3>
	<?php if (!empty($user['DoctrineVersion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Doctrine Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Release Date'); ?></th>
		<th><?php echo __('Changelog'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Label'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['DoctrineVersion'] as $doctrineVersion): ?>
		<tr>
			<td><?php echo $doctrineVersion['doctrine_id']; ?></td>
			<td><?php echo $doctrineVersion['number']; ?></td>
			<td><?php echo $doctrineVersion['release_date']; ?></td>
			<td><?php echo $doctrineVersion['changelog']; ?></td>
			<td><?php echo $doctrineVersion['user_id']; ?></td>
			<td><?php echo $doctrineVersion['id']; ?></td>
			<td><?php echo $doctrineVersion['label']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'doctrine_versions', 'action' => 'view', $doctrineVersion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'doctrine_versions', 'action' => 'edit', $doctrineVersion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'doctrine_versions', 'action' => 'delete', $doctrineVersion['id']), null, __('Are you sure you want to delete # %s?', $doctrineVersion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Doctrine Version'), array('controller' => 'doctrine_versions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Doctrines'); ?></h3>
	<?php if (!empty($user['Doctrine'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Release Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Doctrine'] as $doctrine): ?>
		<tr>
			<td><?php echo $doctrine['id']; ?></td>
			<td><?php echo $doctrine['title']; ?></td>
			<td><?php echo $doctrine['text']; ?></td>
			<td><?php echo $doctrine['created']; ?></td>
			<td><?php echo $doctrine['updated']; ?></td>
			<td><?php echo $doctrine['user_id']; ?></td>
			<td><?php echo $doctrine['release_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'doctrines', 'action' => 'view', $doctrine['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'doctrines', 'action' => 'edit', $doctrine['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'doctrines', 'action' => 'delete', $doctrine['id']), null, __('Are you sure you want to delete # %s?', $doctrine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Doctrine'), array('controller' => 'doctrines', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Records'); ?></h3>
	<?php if (!empty($user['Record'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Song Id'); ?></th>
		<th><?php echo __('Version'); ?></th>
		<th><?php echo __('Isrc'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Artist Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Record'] as $record): ?>
		<tr>
			<td><?php echo $record['id']; ?></td>
			<td><?php echo $record['song_id']; ?></td>
			<td><?php echo $record['version']; ?></td>
			<td><?php echo $record['isrc']; ?></td>
			<td><?php echo $record['user_id']; ?></td>
			<td><?php echo $record['artist_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'records', 'action' => 'view', $record['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'records', 'action' => 'edit', $record['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'records', 'action' => 'delete', $record['id']), null, __('Are you sure you want to delete # %s?', $record['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Songs'); ?></h3>
	<?php if (!empty($user['Song'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Artist Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Song'] as $song): ?>
		<tr>
			<td><?php echo $song['id']; ?></td>
			<td><?php echo $song['title']; ?></td>
			<td><?php echo $song['artist_id']; ?></td>
			<td><?php echo $song['user_id']; ?></td>
			<td><?php echo $song['created']; ?></td>
			<td><?php echo $song['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'songs', 'action' => 'view', $song['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'songs', 'action' => 'edit', $song['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'songs', 'action' => 'delete', $song['id']), null, __('Are you sure you want to delete # %s?', $song['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Song'), array('controller' => 'songs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Submissions'); ?></h3>
	<?php if (!empty($user['Submission'])): ?>
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
		foreach ($user['Submission'] as $submission): ?>
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
