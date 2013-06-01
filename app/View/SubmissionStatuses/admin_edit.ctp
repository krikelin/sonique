<div class="submissionStatuses form">
<?php echo $this->Form->create('SubmissionStatus'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Submission Status'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubmissionStatus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SubmissionStatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Submission Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
