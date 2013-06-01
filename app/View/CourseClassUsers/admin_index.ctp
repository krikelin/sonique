<div class="courseClassUsers index">
	<h2><?php echo __('Course Class Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('course_class_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mark_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($courseClassUsers as $courseClassUser): ?>
	<tr>
		<td><?php echo h($courseClassUser['CourseClassUser']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($courseClassUser['User']['username'], array('controller' => 'users', 'action' => 'view', $courseClassUser['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($courseClassUser['CourseClass']['title'], array('controller' => 'course_classes', 'action' => 'view', $courseClassUser['CourseClass']['id'])); ?>
		</td>
		<td><?php echo h($courseClassUser['CourseClassUser']['created']); ?>&nbsp;</td>
		<td><?php echo h($courseClassUser['CourseClassUser']['updated']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($courseClassUser['Course']['title'], array('controller' => 'courses', 'action' => 'view', $courseClassUser['Course']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($courseClassUser['Mark']['title'], array('controller' => 'marks', 'action' => 'view', $courseClassUser['Mark']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $courseClassUser['CourseClassUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $courseClassUser['CourseClassUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $courseClassUser['CourseClassUser']['id']), null, __('Are you sure you want to delete # %s?', $courseClassUser['CourseClassUser']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Course Class User'), array('action' => 'add')); ?></li>
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
