<div class="courseClasses view">
<h2><?php  echo __('Course Class'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseClass['CourseClass']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseClass['Course']['title'], array('controller' => 'courses', 'action' => 'view', $courseClass['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($courseClass['CourseClass']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($courseClass['CourseClass']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($courseClass['CourseClass']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseClass['User']['username'], array('controller' => 'users', 'action' => 'view', $courseClass['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Class'), array('action' => 'edit', $courseClass['CourseClass']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course Class'), array('action' => 'delete', $courseClass['CourseClass']['id']), null, __('Are you sure you want to delete # %s?', $courseClass['CourseClass']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Classes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Class'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
