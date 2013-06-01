<div class="stations view">
<h2><?php  echo __('Station'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($station['Station']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($station['Station']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($station['StationType']['title'], array('controller' => 'station_types', 'action' => 'view', $station['StationType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($station['Company']['title'], array('controller' => 'companies', 'action' => 'view', $station['Company']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Station'), array('action' => 'edit', $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Station'), array('action' => 'delete', $station['Station']['id']), null, __('Are you sure you want to delete # %s?', $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Station Types'), array('controller' => 'station_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station Type'), array('controller' => 'station_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Airplays'), array('controller' => 'airplays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Airplay'), array('controller' => 'airplays', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Airplays'); ?></h3>
	<?php if (!empty($station['Airplay'])): ?>
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
		foreach ($station['Airplay'] as $airplay): ?>
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
	<h3><?php echo __('Related Submissions'); ?></h3>
	<?php if (!empty($station['Submission'])): ?>
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
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($station['Submission'] as $submission): ?>
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
