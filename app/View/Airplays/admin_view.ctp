<div class="airplays view">
<h2><?php  echo __('Airplay'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($airplay['Airplay']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($airplay['Station']['title'], array('controller' => 'stations', 'action' => 'view', $airplay['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record'); ?></dt>
		<dd>
			<?php echo $this->Html->link($airplay['Record']['id'], array('controller' => 'records', 'action' => 'view', $airplay['Record']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($airplay['Airplay']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submission'); ?></dt>
		<dd>
			<?php echo $this->Html->link($airplay['Submission']['title'], array('controller' => 'submissions', 'action' => 'view', $airplay['Submission']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Airplay'), array('action' => 'edit', $airplay['Airplay']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Airplay'), array('action' => 'delete', $airplay['Airplay']['id']), null, __('Are you sure you want to delete # %s?', $airplay['Airplay']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Airplays'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Airplay'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
