<div class="combatants index">
	<h2><?php echo __('Combatants'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ally'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('starttime'); ?></th>
			<th><?php echo $this->Paginator->sort('endtime'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th><?php echo $this->Paginator->sort('damage'); ?></th>
			<th><?php echo $this->Paginator->sort('damageperc'); ?></th>
			<th><?php echo $this->Paginator->sort('kills'); ?></th>
			<th><?php echo $this->Paginator->sort('healed'); ?></th>
			<th><?php echo $this->Paginator->sort('healedperc'); ?></th>
			<th><?php echo $this->Paginator->sort('critheals'); ?></th>
			<th><?php echo $this->Paginator->sort('heals'); ?></th>
			<th><?php echo $this->Paginator->sort('curedispels'); ?></th>
			<th><?php echo $this->Paginator->sort('powerdrain'); ?></th>
			<th><?php echo $this->Paginator->sort('powerreplenish'); ?></th>
			<th><?php echo $this->Paginator->sort('dps'); ?></th>
			<th><?php echo $this->Paginator->sort('encdps'); ?></th>
			<th><?php echo $this->Paginator->sort('enchps'); ?></th>
			<th><?php echo $this->Paginator->sort('hits'); ?></th>
			<th><?php echo $this->Paginator->sort('crithits'); ?></th>
			<th><?php echo $this->Paginator->sort('blocked'); ?></th>
			<th><?php echo $this->Paginator->sort('misses'); ?></th>
			<th><?php echo $this->Paginator->sort('swings'); ?></th>
			<th><?php echo $this->Paginator->sort('healstaken'); ?></th>
			<th><?php echo $this->Paginator->sort('damagetaken'); ?></th>
			<th><?php echo $this->Paginator->sort('deaths'); ?></th>
			<th><?php echo $this->Paginator->sort('tohit'); ?></th>
			<th><?php echo $this->Paginator->sort('critdamperc'); ?></th>
			<th><?php echo $this->Paginator->sort('crithealperc'); ?></th>
			<th><?php echo $this->Paginator->sort('threatstr'); ?></th>
			<th><?php echo $this->Paginator->sort('threatdelta'); ?></th>
			<th><?php echo $this->Paginator->sort('job'); ?></th>
			<th><?php echo $this->Paginator->sort('parrypct'); ?></th>
			<th><?php echo $this->Paginator->sort('blockpct'); ?></th>
			<th><?php echo $this->Paginator->sort('inctohit'); ?></th>
			<th><?php echo $this->Paginator->sort('overhealpct'); ?></th>
			<th><?php echo $this->Paginator->sort('original_db'); ?></th>
			<th><?php echo $this->Paginator->sort('original_encid'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($combatants as $combatant): ?>
	<tr>
		<td><?php echo h($combatant['Combatant']['id']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['ally']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['name']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['starttime']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['endtime']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['duration']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['damage']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['damageperc']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['kills']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['healed']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['healedperc']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['critheals']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['heals']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['curedispels']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['powerdrain']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['powerreplenish']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['dps']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['encdps']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['enchps']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['hits']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['crithits']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['blocked']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['misses']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['swings']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['healstaken']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['damagetaken']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['deaths']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['tohit']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['critdamperc']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['crithealperc']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['threatstr']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['threatdelta']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['job']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['parrypct']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['blockpct']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['inctohit']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['overhealpct']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['original_db']); ?>&nbsp;</td>
		<td><?php echo h($combatant['Combatant']['original_encid']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $combatant['Combatant']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $combatant['Combatant']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $combatant['Combatant']['id']), array(), __('Are you sure you want to delete # %s?', $combatant['Combatant']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Combatant'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
