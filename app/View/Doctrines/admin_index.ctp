<div class="doctrines index">
	<h2><?php echo __('Doctrines'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('text'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('release_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($doctrines as $doctrine): ?>
	<tr>
		<td><?php echo h($doctrine['Doctrine']['id']); ?>&nbsp;</td>
		<td><?php echo h($doctrine['Doctrine']['title']); ?>&nbsp;</td>
		<td><?php echo h($doctrine['Doctrine']['text']); ?>&nbsp;</td>
		<td><?php echo h($doctrine['Doctrine']['created']); ?>&nbsp;</td>
		<td><?php echo h($doctrine['Doctrine']['updated']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($doctrine['User']['username'], array('controller' => 'users', 'action' => 'view', $doctrine['User']['id'])); ?>
		</td>
		<td><?php echo h($doctrine['Doctrine']['release_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $doctrine['Doctrine']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $doctrine['Doctrine']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $doctrine['Doctrine']['id']), null, __('Are you sure you want to delete # %s?', $doctrine['Doctrine']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Doctrine'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctrine Versions'), array('controller' => 'doctrine_versions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctrine Version'), array('controller' => 'doctrine_versions', 'action' => 'add')); ?> </li>
	</ul>
</div>
