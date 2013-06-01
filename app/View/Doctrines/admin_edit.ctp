<div class="doctrines form">
<?php echo $this->Form->create('Doctrine'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Doctrine'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('text');
		echo $this->Form->input('user_id');
		echo $this->Form->input('release_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Doctrine.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Doctrine.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Doctrines'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctrine Versions'), array('controller' => 'doctrine_versions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctrine Version'), array('controller' => 'doctrine_versions', 'action' => 'add')); ?> </li>
	</ul>
</div>
