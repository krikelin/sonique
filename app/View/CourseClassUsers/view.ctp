<div class="courseClassUsers view">
<h2><?php  echo __('Course Class User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseClassUser['CourseClassUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseClassUser['User']['username'], array('controller' => 'users', 'action' => 'view', $courseClassUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Class'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseClassUser['CourseClass']['title'], array('controller' => 'course_classes', 'action' => 'view', $courseClassUser['CourseClass']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($courseClassUser['CourseClassUser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($courseClassUser['CourseClassUser']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseClassUser['Course']['title'], array('controller' => 'courses', 'action' => 'view', $courseClassUser['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mark'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseClassUser['Mark']['title'], array('controller' => 'marks', 'action' => 'view', $courseClassUser['Mark']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Class User'), array('action' => 'edit', $courseClassUser['CourseClassUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course Class User'), array('action' => 'delete', $courseClassUser['CourseClassUser']['id']), null, __('Are you sure you want to delete # %s?', $courseClassUser['CourseClassUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Class Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Class User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Classes'), array('controller' => 'course_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Class'), array('controller' => 'course_classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
	</ul>
</div>
