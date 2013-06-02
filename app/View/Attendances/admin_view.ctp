<div class="attendances view">
<h2><?php  echo __('Attendance'); ?></h2>
	<dl>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attendance['User']['username'], array('controller' => 'users', 'action' => 'view', $attendance['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lession'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attendance['Lession']['id'], array('controller' => 'lessions', 'action' => 'view', $attendance['Lession']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attendance'), array('action' => 'edit', $attendance['Attendance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendance'), array('action' => 'delete', $attendance['Attendance']['id']), null, __('Are you sure you want to delete # %s?', $attendance['Attendance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lessions'), array('controller' => 'lessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lession'), array('controller' => 'lessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
