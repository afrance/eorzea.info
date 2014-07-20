<div class="encounters form">
<?php echo $this->Form->create('Encounter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Encounter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('starttime');
		echo $this->Form->input('endtime');
		echo $this->Form->input('duration');
		echo $this->Form->input('damage');
		echo $this->Form->input('encdps');
		echo $this->Form->input('zone');
		echo $this->Form->input('kills');
		echo $this->Form->input('deaths');
		echo $this->Form->input('original_db');
		echo $this->Form->input('original_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Encounter.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Encounter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Attack Types'), array('controller' => 'attack_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attack Type'), array('controller' => 'attack_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Combatants'), array('controller' => 'combatants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Combatant'), array('controller' => 'combatants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Damage Types'), array('controller' => 'damage_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Damage Type'), array('controller' => 'damage_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Swings'), array('controller' => 'swings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Swing'), array('controller' => 'swings', 'action' => 'add')); ?> </li>
	</ul>
</div>
