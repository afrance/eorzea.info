<div class="damageTypes form">
<?php echo $this->Form->create('DamageType'); ?>
	<fieldset>
		<legend><?php echo __('Add Damage Type'); ?></legend>
	<?php
		echo $this->Form->input('encounter_id');
		echo $this->Form->input('combatant');
		echo $this->Form->input('grouping');
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
		echo $this->Form->input('hits');
		echo $this->Form->input('crithits');
		echo $this->Form->input('blocked');
		echo $this->Form->input('misses');
		echo $this->Form->input('swings');
		echo $this->Form->input('tohit');
		echo $this->Form->input('averagedelay');
		echo $this->Form->input('critperc');
		echo $this->Form->input('parrypct');
		echo $this->Form->input('blockpct');
		echo $this->Form->input('overheal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Damage Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
