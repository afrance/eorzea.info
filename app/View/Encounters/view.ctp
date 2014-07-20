<div class="encounters view">
<h2><?php echo __('Encounter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Starttime'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['starttime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endtime'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['endtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damage'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['damage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encdps'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['encdps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zone'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['zone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kills'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['kills']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deaths'); ?></dt>
		<dd>
			<?php echo h($encounter['Encounter']['deaths']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Encounter'), array('action' => 'edit', $encounter['Encounter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Encounter'), array('action' => 'delete', $encounter['Encounter']['id']), array(), __('Are you sure you want to delete # %s?', $encounter['Encounter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Attack Types'); ?></h3>
	<?php if (!empty($encounter['AttackType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Encounter Id'); ?></th>
		<th><?php echo __('Attacker'); ?></th>
		<th><?php echo __('Victim'); ?></th>
		<th><?php echo __('Swingtype'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Starttime'); ?></th>
		<th><?php echo __('Endtime'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Damage'); ?></th>
		<th><?php echo __('Encdps'); ?></th>
		<th><?php echo __('Chardps'); ?></th>
		<th><?php echo __('Dps'); ?></th>
		<th><?php echo __('Average'); ?></th>
		<th><?php echo __('Median'); ?></th>
		<th><?php echo __('Minhit'); ?></th>
		<th><?php echo __('Maxhit'); ?></th>
		<th><?php echo __('Resist'); ?></th>
		<th><?php echo __('Hits'); ?></th>
		<th><?php echo __('Crithits'); ?></th>
		<th><?php echo __('Blocked'); ?></th>
		<th><?php echo __('Misses'); ?></th>
		<th><?php echo __('Swings'); ?></th>
		<th><?php echo __('Tohit'); ?></th>
		<th><?php echo __('Averagedelay'); ?></th>
		<th><?php echo __('Critperc'); ?></th>
		<th><?php echo __('Parry'); ?></th>
		<th><?php echo __('Parrypct'); ?></th>
		<th><?php echo __('Block'); ?></th>
		<th><?php echo __('Blockpct'); ?></th>
		<th><?php echo __('Dmgreduced'); ?></th>
		<th><?php echo __('Overheal'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($encounter['AttackType'] as $attackType): ?>
		<tr>
			<td><?php echo $attackType['encounter_id']; ?></td>
			<td><?php echo $attackType['attacker']; ?></td>
			<td><?php echo $attackType['victim']; ?></td>
			<td><?php echo $attackType['swingtype']; ?></td>
			<td><?php echo $attackType['type']; ?></td>
			<td><?php echo $attackType['starttime']; ?></td>
			<td><?php echo $attackType['endtime']; ?></td>
			<td><?php echo $attackType['duration']; ?></td>
			<td><?php echo $attackType['damage']; ?></td>
			<td><?php echo $attackType['encdps']; ?></td>
			<td><?php echo $attackType['chardps']; ?></td>
			<td><?php echo $attackType['dps']; ?></td>
			<td><?php echo $attackType['average']; ?></td>
			<td><?php echo $attackType['median']; ?></td>
			<td><?php echo $attackType['minhit']; ?></td>
			<td><?php echo $attackType['maxhit']; ?></td>
			<td><?php echo $attackType['resist']; ?></td>
			<td><?php echo $attackType['hits']; ?></td>
			<td><?php echo $attackType['crithits']; ?></td>
			<td><?php echo $attackType['blocked']; ?></td>
			<td><?php echo $attackType['misses']; ?></td>
			<td><?php echo $attackType['swings']; ?></td>
			<td><?php echo $attackType['tohit']; ?></td>
			<td><?php echo $attackType['averagedelay']; ?></td>
			<td><?php echo $attackType['critperc']; ?></td>
			<td><?php echo $attackType['parry']; ?></td>
			<td><?php echo $attackType['parrypct']; ?></td>
			<td><?php echo $attackType['block']; ?></td>
			<td><?php echo $attackType['blockpct']; ?></td>
			<td><?php echo $attackType['dmgreduced']; ?></td>
			<td><?php echo $attackType['overheal']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attack_types', 'action' => 'view', $attackType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attack_types', 'action' => 'edit', $attackType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attack_types', 'action' => 'delete', $attackType['id']), array(), __('Are you sure you want to delete # %s?', $attackType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attack Type'), array('controller' => 'attack_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Combatants'); ?></h3>
	<?php if (!empty($encounter['Combatant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Encounter Id'); ?></th>
		<th><?php echo __('Ally'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Starttime'); ?></th>
		<th><?php echo __('Endtime'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Damage'); ?></th>
		<th><?php echo __('Damageperc'); ?></th>
		<th><?php echo __('Kills'); ?></th>
		<th><?php echo __('Healed'); ?></th>
		<th><?php echo __('Healedperc'); ?></th>
		<th><?php echo __('Critheals'); ?></th>
		<th><?php echo __('Heals'); ?></th>
		<th><?php echo __('Curedispels'); ?></th>
		<th><?php echo __('Powerdrain'); ?></th>
		<th><?php echo __('Powerreplenish'); ?></th>
		<th><?php echo __('Dps'); ?></th>
		<th><?php echo __('Encdps'); ?></th>
		<th><?php echo __('Enchps'); ?></th>
		<th><?php echo __('Hits'); ?></th>
		<th><?php echo __('Crithits'); ?></th>
		<th><?php echo __('Blocked'); ?></th>
		<th><?php echo __('Misses'); ?></th>
		<th><?php echo __('Swings'); ?></th>
		<th><?php echo __('Healstaken'); ?></th>
		<th><?php echo __('Damagetaken'); ?></th>
		<th><?php echo __('Deaths'); ?></th>
		<th><?php echo __('Tohit'); ?></th>
		<th><?php echo __('Critdamperc'); ?></th>
		<th><?php echo __('Crithealperc'); ?></th>
		<th><?php echo __('Threatstr'); ?></th>
		<th><?php echo __('Threatdelta'); ?></th>
		<th><?php echo __('Job'); ?></th>
		<th><?php echo __('Parrypct'); ?></th>
		<th><?php echo __('Blockpct'); ?></th>
		<th><?php echo __('Inctohit'); ?></th>
		<th><?php echo __('Overhealpct'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($encounter['Combatant'] as $combatant): ?>
		<tr>
			<td><?php echo $combatant['encounter_id']; ?></td>
			<td><?php echo $combatant['ally']; ?></td>
			<td><?php echo $combatant['name']; ?></td>
			<td><?php echo $combatant['starttime']; ?></td>
			<td><?php echo $combatant['endtime']; ?></td>
			<td><?php echo $combatant['duration']; ?></td>
			<td><?php echo $combatant['damage']; ?></td>
			<td><?php echo $combatant['damageperc']; ?></td>
			<td><?php echo $combatant['kills']; ?></td>
			<td><?php echo $combatant['healed']; ?></td>
			<td><?php echo $combatant['healedperc']; ?></td>
			<td><?php echo $combatant['critheals']; ?></td>
			<td><?php echo $combatant['heals']; ?></td>
			<td><?php echo $combatant['curedispels']; ?></td>
			<td><?php echo $combatant['powerdrain']; ?></td>
			<td><?php echo $combatant['powerreplenish']; ?></td>
			<td><?php echo $combatant['dps']; ?></td>
			<td><?php echo $combatant['encdps']; ?></td>
			<td><?php echo $combatant['enchps']; ?></td>
			<td><?php echo $combatant['hits']; ?></td>
			<td><?php echo $combatant['crithits']; ?></td>
			<td><?php echo $combatant['blocked']; ?></td>
			<td><?php echo $combatant['misses']; ?></td>
			<td><?php echo $combatant['swings']; ?></td>
			<td><?php echo $combatant['healstaken']; ?></td>
			<td><?php echo $combatant['damagetaken']; ?></td>
			<td><?php echo $combatant['deaths']; ?></td>
			<td><?php echo $combatant['tohit']; ?></td>
			<td><?php echo $combatant['critdamperc']; ?></td>
			<td><?php echo $combatant['crithealperc']; ?></td>
			<td><?php echo $combatant['threatstr']; ?></td>
			<td><?php echo $combatant['threatdelta']; ?></td>
			<td><?php echo $combatant['job']; ?></td>
			<td><?php echo $combatant['parrypct']; ?></td>
			<td><?php echo $combatant['blockpct']; ?></td>
			<td><?php echo $combatant['inctohit']; ?></td>
			<td><?php echo $combatant['overhealpct']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'combatants', 'action' => 'view', $combatant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'combatants', 'action' => 'edit', $combatant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'combatants', 'action' => 'delete', $combatant['id']), array(), __('Are you sure you want to delete # %s?', $combatant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Combatant'), array('controller' => 'combatants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Damage Types'); ?></h3>
	<?php if (!empty($encounter['DamageType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Encounter Id'); ?></th>
		<th><?php echo __('Combatant'); ?></th>
		<th><?php echo __('Grouping'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Starttime'); ?></th>
		<th><?php echo __('Endtime'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Damage'); ?></th>
		<th><?php echo __('Encdps'); ?></th>
		<th><?php echo __('Chardps'); ?></th>
		<th><?php echo __('Dps'); ?></th>
		<th><?php echo __('Average'); ?></th>
		<th><?php echo __('Median'); ?></th>
		<th><?php echo __('Minhit'); ?></th>
		<th><?php echo __('Maxhit'); ?></th>
		<th><?php echo __('Hits'); ?></th>
		<th><?php echo __('Crithits'); ?></th>
		<th><?php echo __('Blocked'); ?></th>
		<th><?php echo __('Misses'); ?></th>
		<th><?php echo __('Swings'); ?></th>
		<th><?php echo __('Tohit'); ?></th>
		<th><?php echo __('Averagedelay'); ?></th>
		<th><?php echo __('Critperc'); ?></th>
		<th><?php echo __('Parrypct'); ?></th>
		<th><?php echo __('Blockpct'); ?></th>
		<th><?php echo __('Overheal'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($encounter['DamageType'] as $damageType): ?>
		<tr>
			<td><?php echo $damageType['encounter_id']; ?></td>
			<td><?php echo $damageType['combatant']; ?></td>
			<td><?php echo $damageType['grouping']; ?></td>
			<td><?php echo $damageType['type']; ?></td>
			<td><?php echo $damageType['starttime']; ?></td>
			<td><?php echo $damageType['endtime']; ?></td>
			<td><?php echo $damageType['duration']; ?></td>
			<td><?php echo $damageType['damage']; ?></td>
			<td><?php echo $damageType['encdps']; ?></td>
			<td><?php echo $damageType['chardps']; ?></td>
			<td><?php echo $damageType['dps']; ?></td>
			<td><?php echo $damageType['average']; ?></td>
			<td><?php echo $damageType['median']; ?></td>
			<td><?php echo $damageType['minhit']; ?></td>
			<td><?php echo $damageType['maxhit']; ?></td>
			<td><?php echo $damageType['hits']; ?></td>
			<td><?php echo $damageType['crithits']; ?></td>
			<td><?php echo $damageType['blocked']; ?></td>
			<td><?php echo $damageType['misses']; ?></td>
			<td><?php echo $damageType['swings']; ?></td>
			<td><?php echo $damageType['tohit']; ?></td>
			<td><?php echo $damageType['averagedelay']; ?></td>
			<td><?php echo $damageType['critperc']; ?></td>
			<td><?php echo $damageType['parrypct']; ?></td>
			<td><?php echo $damageType['blockpct']; ?></td>
			<td><?php echo $damageType['overheal']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'damage_types', 'action' => 'view', $damageType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'damage_types', 'action' => 'edit', $damageType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'damage_types', 'action' => 'delete', $damageType['id']), array(), __('Are you sure you want to delete # %s?', $damageType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Damage Type'), array('controller' => 'damage_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Swings'); ?></h3>
	<?php if (!empty($encounter['Swing'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Encounter Id'); ?></th>
		<th><?php echo __('Stime'); ?></th>
		<th><?php echo __('Attacker'); ?></th>
		<th><?php echo __('Swingtype'); ?></th>
		<th><?php echo __('Attacktype'); ?></th>
		<th><?php echo __('Damagetype'); ?></th>
		<th><?php echo __('Victim'); ?></th>
		<th><?php echo __('Damage'); ?></th>
		<th><?php echo __('Damagestring'); ?></th>
		<th><?php echo __('Critical'); ?></th>
		<th><?php echo __('Special'); ?></th>
		<th><?php echo __('Dmgadjust'); ?></th>
		<th><?php echo __('Dmgreduced'); ?></th>
		<th><?php echo __('Overheal'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($encounter['Swing'] as $swing): ?>
		<tr>
			<td><?php echo $swing['encounter_id']; ?></td>
			<td><?php echo $swing['stime']; ?></td>
			<td><?php echo $swing['attacker']; ?></td>
			<td><?php echo $swing['swingtype']; ?></td>
			<td><?php echo $swing['attacktype']; ?></td>
			<td><?php echo $swing['damagetype']; ?></td>
			<td><?php echo $swing['victim']; ?></td>
			<td><?php echo $swing['damage']; ?></td>
			<td><?php echo $swing['damagestring']; ?></td>
			<td><?php echo $swing['critical']; ?></td>
			<td><?php echo $swing['special']; ?></td>
			<td><?php echo $swing['dmgadjust']; ?></td>
			<td><?php echo $swing['dmgreduced']; ?></td>
			<td><?php echo $swing['overheal']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'swings', 'action' => 'view', $swing['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'swings', 'action' => 'edit', $swing['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'swings', 'action' => 'delete', $swing['id']), array(), __('Are you sure you want to delete # %s?', $swing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Swing'), array('controller' => 'swings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
