<div class="combatantsEncounters index">
	<h2><?php echo __('Combatants Encounters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('combatant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('encounter_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($combatantsEncounters as $combatantsEncounter): ?>
	<tr>
		<td><?php echo h($combatantsEncounter['CombatantsEncounter']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($combatantsEncounter['Combatant']['name'], array('controller' => 'combatants', 'action' => 'view', $combatantsEncounter['Combatant']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($combatantsEncounter['Encounter']['title'], array('controller' => 'encounters', 'action' => 'view', $combatantsEncounter['Encounter']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $combatantsEncounter['CombatantsEncounter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $combatantsEncounter['CombatantsEncounter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $combatantsEncounter['CombatantsEncounter']['id']), array(), __('Are you sure you want to delete # %s?', $combatantsEncounter['CombatantsEncounter']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Combatants Encounter'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Combatants'), array('controller' => 'combatants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Combatant'), array('controller' => 'combatants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
