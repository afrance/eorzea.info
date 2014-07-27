<div class="importResults index">
	<h2><?php echo __('Import Results'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('encounter_id'); ?></th>
			<th><?php echo $this->Paginator->sort('original_encid'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('combatants_added'); ?></th>
			<th><?php echo $this->Paginator->sort('combatants_removed'); ?></th>
			<th><?php echo $this->Paginator->sort('swings_added'); ?></th>
			<th><?php echo $this->Paginator->sort('swings_removed'); ?></th>
			<th><?php echo $this->Paginator->sort('attacktypes_added'); ?></th>
			<th><?php echo $this->Paginator->sort('attacktypes_removed'); ?></th>
			<th><?php echo $this->Paginator->sort('damagetypes_added'); ?></th>
			<th><?php echo $this->Paginator->sort('damagetypes_removed'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($importResults as $importResult): ?>
	<tr>
		<td><?php echo h($importResult['ImportResult']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($importResult['Encounter']['title'], array('controller' => 'encounters', 'action' => 'view', $importResult['Encounter']['id'])); ?>
		</td>
		<td><?php echo h($importResult['ImportResult']['original_encid']); ?>&nbsp;</td>
		<td><?php echo h($importResult['ImportResult']['status']); ?>&nbsp;</td>
		<td><?php echo h($importResult['ImportResult']['combatants_added'] \/ $importResult['ImportResult']['combatants_found']); ?>&nbsp;</td>
		<td><?php echo h($importResult['ImportResult']['combatants_removed'] \/ $importResult['ImportResult']['combatants_found']); ?>&nbsp;</td>
		<td><?php echo h($importResult['ImportResult']['swings_added'] \/ $importResult['ImportResult']['swings_found']); ?>&nbsp;</td>
		<td><?php echo h($importResult['ImportResult']['swings_removed'] \/ $importResult['ImportResult']['swings_found']); ?>&nbsp;</td>
		<td><?php echo h($importResult['ImportResult']['attacktypes_added'] \/ $importResult['ImportResult']['attacktypes_found']); ?>&nbsp;</td>
		<td><?php echo h($importResult['ImportResult']['attacktypes_removed'] \/ $importResult['ImportResult']['attacktypes_found']); ?>&nbsp;</td>
		<td><?php echo h($importResult['ImportResult']['damagetypes_added'] \/ $importResult['ImportResult']['damagetypes_found']); ?>&nbsp;</td>
		<td><?php echo h($importResult['ImportResult']['damagetypes_removed'] \/ $importResult['ImportResult']['damagetypes_found']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('New Import Result'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
