<div class="damageTypes index">
	<h2><?php echo __('Damage Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('encounter_id'); ?></th>
			<th><?php echo $this->Paginator->sort('combatant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('grouping'); ?></th>
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
			<th><?php echo $this->Paginator->sort('hits'); ?></th>
			<th><?php echo $this->Paginator->sort('crithits'); ?></th>
			<th><?php echo $this->Paginator->sort('blocked'); ?></th>
			<th><?php echo $this->Paginator->sort('misses'); ?></th>
			<th><?php echo $this->Paginator->sort('swings'); ?></th>
			<th><?php echo $this->Paginator->sort('tohit'); ?></th>
			<th><?php echo $this->Paginator->sort('averagedelay'); ?></th>
			<th><?php echo $this->Paginator->sort('critperc'); ?></th>
			<th><?php echo $this->Paginator->sort('parrypct'); ?></th>
			<th><?php echo $this->Paginator->sort('blockpct'); ?></th>
			<th><?php echo $this->Paginator->sort('overheal'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($damageTypes as $damageType): ?>
	<tr>
		<td><?php echo h($damageType['DamageType']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($damageType['Encounter']['title'], array('controller' => 'encounters', 'action' => 'view', $damageType['Encounter']['id'])); ?>
		</td>
		<td><?php echo h($damageType['DamageType']['combatant_id']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['grouping']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['type']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['starttime']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['endtime']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['duration']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['damage']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['encdps']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['chardps']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['dps']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['average']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['median']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['minhit']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['maxhit']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['hits']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['crithits']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['blocked']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['misses']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['swings']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['tohit']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['averagedelay']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['critperc']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['parrypct']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['blockpct']); ?>&nbsp;</td>
		<td><?php echo h($damageType['DamageType']['overheal']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $damageType['DamageType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $damageType['DamageType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $damageType['DamageType']['id']), array(), __('Are you sure you want to delete # %s?', $damageType['DamageType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Damage Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
