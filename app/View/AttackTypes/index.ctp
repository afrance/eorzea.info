<div class="attackTypes index">
	<h2><?php echo __('Attack Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('encounter_id'); ?></th>
			<th><?php echo $this->Paginator->sort('attacker_id'); ?></th>
			<th><?php echo $this->Paginator->sort('victim_id'); ?></th>
			<th><?php echo $this->Paginator->sort('swingtype'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('starttime'); ?></th>
			<th><?php echo $this->Paginator->sort('endtime'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th><?php echo $this->Paginator->sort('damage'); ?></th>
			<th><?php echo $this->Paginator->sort('encdps'); ?></th>
			<th><?php echo $this->Paginator->sort('chardps'); ?></th>
			<th><?php echo $this->Paginator->sort('dps'); ?></th>
			<th><?php echo $this->Paginator->sort('average'); ?></th>
			<th><?php echo $this->Paginator->sort('median'); ?></th>
			<th><?php echo $this->Paginator->sort('minhit'); ?></th>
			<th><?php echo $this->Paginator->sort('maxhit'); ?></th>
			<th><?php echo $this->Paginator->sort('resist'); ?></th>
			<th><?php echo $this->Paginator->sort('hits'); ?></th>
			<th><?php echo $this->Paginator->sort('crithits'); ?></th>
			<th><?php echo $this->Paginator->sort('blocked'); ?></th>
			<th><?php echo $this->Paginator->sort('misses'); ?></th>
			<th><?php echo $this->Paginator->sort('swings'); ?></th>
			<th><?php echo $this->Paginator->sort('tohit'); ?></th>
			<th><?php echo $this->Paginator->sort('averagedelay'); ?></th>
			<th><?php echo $this->Paginator->sort('critperc'); ?></th>
			<th><?php echo $this->Paginator->sort('parry'); ?></th>
			<th><?php echo $this->Paginator->sort('parrypct'); ?></th>
			<th><?php echo $this->Paginator->sort('block'); ?></th>
			<th><?php echo $this->Paginator->sort('blockpct'); ?></th>
			<th><?php echo $this->Paginator->sort('dmgreduced'); ?></th>
			<th><?php echo $this->Paginator->sort('overheal'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($attackTypes as $attackType): ?>
	<tr>
		<td><?php echo h($attackType['AttackType']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attackType['Encounter']['title'], array('controller' => 'encounters', 'action' => 'view', $attackType['Encounter']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($attackType['Attacker']['name'], array('controller' => 'combatants', 'action' => 'view', $attackType['Attacker']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($attackType['Victim']['name'], array('controller' => 'combatants', 'action' => 'view', $attackType['Victim']['id'])); ?>
		</td>
		<td><?php echo h($attackType['AttackType']['swingtype']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['type']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['starttime']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['endtime']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['duration']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['damage']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['encdps']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['chardps']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['dps']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['average']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['median']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['minhit']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['maxhit']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['resist']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['hits']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['crithits']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['blocked']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['misses']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['swings']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['tohit']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['averagedelay']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['critperc']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['parry']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['parrypct']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['block']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['blockpct']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['dmgreduced']); ?>&nbsp;</td>
		<td><?php echo h($attackType['AttackType']['overheal']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attackType['AttackType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attackType['AttackType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attackType['AttackType']['id']), array(), __('Are you sure you want to delete # %s?', $attackType['AttackType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Attack Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Combatants'), array('controller' => 'combatants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attacker'), array('controller' => 'combatants', 'action' => 'add')); ?> </li>
	</ul>
</div>
