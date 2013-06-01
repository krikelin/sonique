<div class="lessions index">
	<h2><?php echo __('Lessions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('time'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th><?php echo $this->Paginator->sort('token'); ?></th>
			<th><?php echo $this->Paginator->sort('hall_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lessions as $lession): ?>
	<tr>
		<td><?php echo h($lession['Lession']['id']); ?>&nbsp;</td>
		<td><?php echo h($lession['Lession']['time']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lession['Course']['title'], array('controller' => 'courses', 'action' => 'view', $lession['Course']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($lession['User']['id'], array('controller' => 'users', 'action' => 'view', $lession['User']['id'])); ?>
		</td>
		<td><?php echo h($lession['Lession']['duration']); ?>&nbsp;</td>
		<td><?php echo h($lession['Lession']['token']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lession['Hall']['title'], array('controller' => 'halls', 'action' => 'view', $lession['Hall']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lession['Lession']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lession['Lession']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lession['Lession']['id']), null, __('Are you sure you want to delete # %s?', $lession['Lession']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lession'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
