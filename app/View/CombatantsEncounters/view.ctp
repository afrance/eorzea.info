<div class="combatantsEncounters view">
<h2><?php echo __('Combatants Encounter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($combatantsEncounter['CombatantsEncounter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Combatant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($combatantsEncounter['Combatant']['name'], array('controller' => 'combatants', 'action' => 'view', $combatantsEncounter['Combatant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encounter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($combatantsEncounter['Encounter']['title'], array('controller' => 'encounters', 'action' => 'view', $combatantsEncounter['Encounter']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Combatants Encounter'), array('action' => 'edit', $combatantsEncounter['CombatantsEncounter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Combatants Encounter'), array('action' => 'delete', $combatantsEncounter['CombatantsEncounter']['id']), array(), __('Are you sure you want to delete # %s?', $combatantsEncounter['CombatantsEncounter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Combatants Encounters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Combatants Encounter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Combatants'), array('controller' => 'combatants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Combatant'), array('controller' => 'combatants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
