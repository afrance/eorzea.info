<div class="combatants form">
<?php echo $this->Form->create('Combatant'); ?>
	<fieldset>
		<legend><?php echo __('Edit Combatant'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ally');
		echo $this->Form->input('name');
		echo $this->Form->input('starttime');
		echo $this->Form->input('endtime');
		echo $this->Form->input('duration');
		echo $this->Form->input('damage');
		echo $this->Form->input('damageperc');
		echo $this->Form->input('kills');
		echo $this->Form->input('healed');
		echo $this->Form->input('healedperc');
		echo $this->Form->input('critheals');
		echo $this->Form->input('heals');
		echo $this->Form->input('curedispels');
		echo $this->Form->input('powerdrain');
		echo $this->Form->input('powerreplenish');
		echo $this->Form->input('dps');
		echo $this->Form->input('encdps');
		echo $this->Form->input('enchps');
		echo $this->Form->input('hits');
		echo $this->Form->input('crithits');
		echo $this->Form->input('blocked');
		echo $this->Form->input('misses');
		echo $this->Form->input('swings');
		echo $this->Form->input('healstaken');
		echo $this->Form->input('damagetaken');
		echo $this->Form->input('deaths');
		echo $this->Form->input('tohit');
		echo $this->Form->input('critdamperc');
		echo $this->Form->input('crithealperc');
		echo $this->Form->input('threatstr');
		echo $this->Form->input('threatdelta');
		echo $this->Form->input('job');
		echo $this->Form->input('parrypct');
		echo $this->Form->input('blockpct');
		echo $this->Form->input('inctohit');
		echo $this->Form->input('overhealpct');
		echo $this->Form->input('original_db');
		echo $this->Form->input('original_encid');
		echo $this->Form->input('Encounter');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Combatant.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Combatant.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Combatants'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
