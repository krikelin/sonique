<div class="recordStates view">
<h2><?php  echo __('Record State'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recordState['RecordState']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recordState['Record']['id'], array('controller' => 'records', 'action' => 'view', $recordState['Record']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Play Count'); ?></dt>
		<dd>
			<?php echo h($recordState['RecordState']['play_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New Plays'); ?></dt>
		<dd>
			<?php echo h($recordState['RecordState']['new_plays']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($recordState['RecordState']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Record State'), array('action' => 'edit', $recordState['RecordState']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Record State'), array('action' => 'delete', $recordState['RecordState']['id']), null, __('Are you sure you want to delete # %s?', $recordState['RecordState']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Record States'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record State'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>
