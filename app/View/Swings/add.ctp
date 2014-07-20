<div class="swings form">
<?php echo $this->Form->create('Swing'); ?>
	<fieldset>
		<legend><?php echo __('Add Swing'); ?></legend>
	<?php
		echo $this->Form->input('encounter_id');
		echo $this->Form->input('stime');
		echo $this->Form->input('attacker_id');
		echo $this->Form->input('swingtype');
		echo $this->Form->input('attacktype');
		echo $this->Form->input('damagetype');
		echo $this->Form->input('victim_id');
		echo $this->Form->input('damage');
		echo $this->Form->input('damagestring');
		echo $this->Form->input('critical');
		echo $this->Form->input('special');
		echo $this->Form->input('dmgadjust');
		echo $this->Form->input('dmgreduced');
		echo $this->Form->input('overheal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Swings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Combatants'), array('controller' => 'combatants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attacker'), array('controller' => 'combatants', 'action' => 'add')); ?> </li>
	</ul>
</div>
