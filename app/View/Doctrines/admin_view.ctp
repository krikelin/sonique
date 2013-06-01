<div class="doctrines view">
<h2><?php  echo __('Doctrine'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($doctrine['Doctrine']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($doctrine['Doctrine']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($doctrine['Doctrine']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($doctrine['Doctrine']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($doctrine['Doctrine']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doctrine['User']['username'], array('controller' => 'users', 'action' => 'view', $doctrine['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Release Date'); ?></dt>
		<dd>
			<?php echo h($doctrine['Doctrine']['release_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doctrine'), array('action' => 'edit', $doctrine['Doctrine']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doctrine'), array('action' => 'delete', $doctrine['Doctrine']['id']), null, __('Are you sure you want to delete # %s?', $doctrine['Doctrine']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctrines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctrine'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctrine Versions'), array('controller' => 'doctrine_versions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctrine Version'), array('controller' => 'doctrine_versions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Doctrine Versions'); ?></h3>
	<?php if (!empty($doctrine['DoctrineVersion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Doctrine Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Release Date'); ?></th>
		<th><?php echo __('Changelog'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($doctrine['DoctrineVersion'] as $doctrineVersion): ?>
		<tr>
			<td><?php echo $doctrineVersion['doctrine_id']; ?></td>
			<td><?php echo $doctrineVersion['number']; ?></td>
			<td><?php echo $doctrineVersion['release_date']; ?></td>
			<td><?php echo $doctrineVersion['changelog']; ?></td>
			<td><?php echo $doctrineVersion['user_id']; ?></td>
			<td><?php echo $doctrineVersion['id']; ?></td>
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
