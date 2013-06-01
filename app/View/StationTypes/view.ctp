<div class="stationTypes view">
<h2><?php  echo __('Station Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stationType['StationType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($stationType['StationType']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Station Type'), array('action' => 'edit', $stationType['StationType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Station Type'), array('action' => 'delete', $stationType['StationType']['id']), null, __('Are you sure you want to delete # %s?', $stationType['StationType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Station Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Stations'); ?></h3>
	<?php if (!empty($stationType['Station'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Station Type Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($stationType['Station'] as $station): ?>
		<tr>
			<td><?php echo $station['id']; ?></td>
			<td><?php echo $station['title']; ?></td>
			<td><?php echo $station['station_type_id']; ?></td>
			<td><?php echo $station['company_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stations', 'action' => 'view', $station['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stations', 'action' => 'edit', $station['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stations', 'action' => 'delete', $station['id']), null, __('Are you sure you want to delete # %s?', $station['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
