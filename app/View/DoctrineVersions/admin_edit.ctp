<div class="doctrineVersions form">
<?php echo $this->Form->create('DoctrineVersion'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Doctrine Version'); ?></legend>
	<?php
		echo $this->Form->input('doctrine_id');
		echo $this->Form->input('number');
		echo $this->Form->input('release_date');
		echo $this->Form->input('changelog');
		echo $this->Form->input('user_id');
		echo $this->Form->input('id');
		echo $this->Form->input('label');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DoctrineVersion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DoctrineVersion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Doctrine Versions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doctrines'), array('controller' => 'doctrines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctrine'), array('controller' => 'doctrines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
