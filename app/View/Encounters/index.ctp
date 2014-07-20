<div class="encounters index">
	<h2><?php echo __('Encounters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('starttime'); ?></th>
			<th><?php echo $this->Paginator->sort('endtime'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th><?php echo $this->Paginator->sort('damage'); ?></th>
			<th><?php echo $this->Paginator->sort('encdps'); ?></th>
			<th><?php echo $this->Paginator->sort('zone_id'); ?></th>
			<th><?php echo $this->Paginator->sort('kills'); ?></th>
			<th><?php echo $this->Paginator->sort('deaths'); ?></th>
			<th><?php echo $this->Paginator->sort('original_db'); ?></th>
			<th><?php echo $this->Paginator->sort('original_encid'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($encounters as $encounter): ?>
	<tr>
		<td><?php echo h($encounter['Encounter']['id']); ?>&nbsp;</td>
		<td><?php echo h($encounter['Encounter']['title']); ?>&nbsp;</td>
		<td><?php echo h($encounter['Encounter']['starttime']); ?>&nbsp;</td>
		<td><?php echo h($encounter['Encounter']['endtime']); ?>&nbsp;</td>
		<td><?php echo h($encounter['Encounter']['duration']); ?>&nbsp;</td>
		<td><?php echo h($encounter['Encounter']['damage']); ?>&nbsp;</td>
		<td><?php echo h($encounter['Encounter']['encdps']); ?>&nbsp;</td>
		<td><?php echo h($encounter['Encounter']['zone_id']); ?>&nbsp;</td>
		<td><?php echo h($encounter['Encounter']['kills']); ?>&nbsp;</td>
		<td><?php echo h($encounter['Encounter']['deaths']); ?>&nbsp;</td>
		<td><?php echo h($encounter['Encounter']['original_db']); ?>&nbsp;</td>
		<td><?php echo h($encounter['Encounter']['original_encid']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $encounter['Encounter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $encounter['Encounter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $encounter['Encounter']['id']), array(), __('Are you sure you want to delete # %s?', $encounter['Encounter']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Encounter'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Attack Types'), array('controller' => 'attack_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attack Type'), array('controller' => 'attack_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Damage Types'), array('controller' => 'damage_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Damage Type'), array('controller' => 'damage_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Swings'), array('controller' => 'swings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Swing'), array('controller' => 'swings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Combatants'), array('controller' => 'combatants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Combatant'), array('controller' => 'combatants', 'action' => 'add')); ?> </li>
	</ul>
</div>
