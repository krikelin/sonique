<div class="doctrineVersions view">
<h2><?php  echo __('Doctrine Version'); ?></h2>
	<dl>
		<dt><?php echo __('Doctrine'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doctrineVersion['Doctrine']['title'], array('controller' => 'doctrines', 'action' => 'view', $doctrineVersion['Doctrine']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($doctrineVersion['DoctrineVersion']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Release Date'); ?></dt>
		<dd>
			<?php echo h($doctrineVersion['DoctrineVersion']['release_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Changelog'); ?></dt>
		<dd>
			<?php echo h($doctrineVersion['DoctrineVersion']['changelog']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doctrineVersion['User']['username'], array('controller' => 'users', 'action' => 'view', $doctrineVersion['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($doctrineVersion['DoctrineVersion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label'); ?></dt>
		<dd>
			<?php echo h($doctrineVersion['DoctrineVersion']['label']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doctrine Version'), array('action' => 'edit', $doctrineVersion['DoctrineVersion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doctrine Version'), array('action' => 'delete', $doctrineVersion['DoctrineVersion']['id']), null, __('Are you sure you want to delete # %s?', $doctrineVersion['DoctrineVersion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctrine Versions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctrine Version'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctrines'), array('controller' => 'doctrines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctrine'), array('controller' => 'doctrines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
