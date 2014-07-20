<div class="combatantsEncounters form">
<?php echo $this->Form->create('CombatantsEncounter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Combatants Encounter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('combatant_id');
		echo $this->Form->input('encounter_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CombatantsEncounter.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CombatantsEncounter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Combatants Encounters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Combatants'), array('controller' => 'combatants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Combatant'), array('controller' => 'combatants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
