<div class="qis view">
<h2><?php  echo __('Qi'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($qi['Qi']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($qi['User']['username'], array('controller' => 'users', 'action' => 'view', $qi['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($qi['Qi']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($qi['Qi']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($qi['Qi']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Balance'); ?></dt>
		<dd>
			<?php echo h($qi['Qi']['balance']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Qi'), array('action' => 'edit', $qi['Qi']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Qi'), array('action' => 'delete', $qi['Qi']['id']), null, __('Are you sure you want to delete # %s?', $qi['Qi']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Qis'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qi'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
