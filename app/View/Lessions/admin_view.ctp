<div class="lessions view">
<h2><?php  echo __('Lession'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lession['Lession']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($lession['Lession']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lession['Course']['title'], array('controller' => 'courses', 'action' => 'view', $lession['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lession['User']['id'], array('controller' => 'users', 'action' => 'view', $lession['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($lession['Lession']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token'); ?></dt>
		<dd>
			<?php echo h($lession['Lession']['token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hall'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lession['Hall']['title'], array('controller' => 'halls', 'action' => 'view', $lession['Hall']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lession'), array('action' => 'edit', $lession['Lession']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lession'), array('action' => 'delete', $lession['Lession']['id']), null, __('Are you sure you want to delete # %s?', $lession['Lession']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lessions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lession'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Halls'), array('controller' => 'halls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall'), array('controller' => 'halls', 'action' => 'add')); ?> </li>
	</ul>
</div>
