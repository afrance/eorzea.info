<div class="importResults form">
<?php echo $this->Form->create('ImportResult'); ?>
	<fieldset>
		<legend><?php echo __('Edit Import Result'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('encounter_id');
		echo $this->Form->input('original_encid');
		echo $this->Form->input('status');
		echo $this->Form->input('combatants_found');
		echo $this->Form->input('combatants_added');
		echo $this->Form->input('combatants_removed');
		echo $this->Form->input('swings_found');
		echo $this->Form->input('swings_added');
		echo $this->Form->input('swings_removed');
		echo $this->Form->input('attacktypes_found');
		echo $this->Form->input('attacktypes_added');
		echo $this->Form->input('attacktypes_removed');
		echo $this->Form->input('damagetypes_found');
		echo $this->Form->input('damagetypes_added');
		echo $this->Form->input('damagetypes_removed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ImportResult.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ImportResult.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Import Results'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
