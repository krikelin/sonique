<div class="halls form">
<?php echo $this->Form->create('Hall'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Hall'); ?></legend>
	<?php
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Halls'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lessions'), array('controller' => 'lessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lession'), array('controller' => 'lessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
