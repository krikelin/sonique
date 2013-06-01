<div class="courses view">
<h2><?php  echo __('Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($course['Course']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($course['Course']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qi'); ?></dt>
		<dd>
			<?php echo h($course['Course']['qi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plans'); ?></dt>
		<dd>
			<?php echo h($course['Course']['plans']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Classes'), array('controller' => 'course_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Class'), array('controller' => 'course_classes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Course Classes'); ?></h3>
	<?php if (!empty($course['CourseClass'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['CourseClass'] as $courseClass): ?>
		<tr>
			<td><?php echo $courseClass['id']; ?></td>
			<td><?php echo $courseClass['course_id']; ?></td>
			<td><?php echo $courseClass['start_time']; ?></td>
			<td><?php echo $courseClass['end_time']; ?></td>
			<td><?php echo $courseClass['title']; ?></td>
			<td><?php echo $courseClass['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'course_classes', 'action' => 'view', $courseClass['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'course_classes', 'action' => 'edit', $courseClass['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'course_classes', 'action' => 'delete', $courseClass['id']), null, __('Are you sure you want to delete # %s?', $courseClass['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course Class'), array('controller' => 'course_classes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
