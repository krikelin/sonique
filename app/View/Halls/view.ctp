<div class="halls view">
<h2><?php  echo __('Hall'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($hall['Hall']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hall'), array('action' => 'edit', $hall['Hall']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hall'), array('action' => 'delete', $hall['Hall']['id']), null, __('Are you sure you want to delete # %s?', $hall['Hall']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Halls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lessions'), array('controller' => 'lessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lession'), array('controller' => 'lessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lessions'); ?></h3>
	<?php if (!empty($hall['Lession'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Token'); ?></th>
		<th><?php echo __('Hall Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hall['Lession'] as $lession): ?>
		<tr>
			<td><?php echo $lession['id']; ?></td>
			<td><?php echo $lession['time']; ?></td>
			<td><?php echo $lession['course_id']; ?></td>
			<td><?php echo $lession['user_id']; ?></td>
			<td><?php echo $lession['duration']; ?></td>
			<td><?php echo $lession['token']; ?></td>
			<td><?php echo $lession['hall_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lessions', 'action' => 'view', $lession['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lessions', 'action' => 'edit', $lession['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lessions', 'action' => 'delete', $lession['id']), null, __('Are you sure you want to delete # %s?', $lession['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lession'), array('controller' => 'lessions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
