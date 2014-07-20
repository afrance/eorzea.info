<div class="attackTypes form">
<?php echo $this->Form->create('AttackType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Attack Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('encounter_id');
		echo $this->Form->input('attacker_id');
		echo $this->Form->input('victim_id');
		echo $this->Form->input('swingtype');
		echo $this->Form->input('type');
		echo $this->Form->input('starttime');
		echo $this->Form->input('endtime');
		echo $this->Form->input('duration');
		echo $this->Form->input('damage');
		echo $this->Form->input('encdps');
		echo $this->Form->input('chardps');
		echo $this->Form->input('dps');
		echo $this->Form->input('average');
		echo $this->Form->input('median');
		echo $this->Form->input('minhit');
		echo $this->Form->input('maxhit');
		echo $this->Form->input('resist');
		echo $this->Form->input('hits');
		echo $this->Form->input('crithits');
		echo $this->Form->input('blocked');
		echo $this->Form->input('misses');
		echo $this->Form->input('swings');
		echo $this->Form->input('tohit');
		echo $this->Form->input('averagedelay');
		echo $this->Form->input('critperc');
		echo $this->Form->input('parry');
		echo $this->Form->input('parrypct');
		echo $this->Form->input('block');
		echo $this->Form->input('blockpct');
		echo $this->Form->input('dmgreduced');
		echo $this->Form->input('overheal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AttackType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('AttackType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Attack Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Combatants'), array('controller' => 'combatants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attacker'), array('controller' => 'combatants', 'action' => 'add')); ?> </li>
	</ul>
</div>
