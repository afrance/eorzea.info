<div class="swings index">
	<h2><?php echo __('Swings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('encounter_id'); ?></th>
			<th><?php echo $this->Paginator->sort('stime'); ?></th>
			<th><?php echo $this->Paginator->sort('attacker'); ?></th>
			<th><?php echo $this->Paginator->sort('swingtype'); ?></th>
			<th><?php echo $this->Paginator->sort('attacktype'); ?></th>
			<th><?php echo $this->Paginator->sort('damagetype'); ?></th>
			<th><?php echo $this->Paginator->sort('victim'); ?></th>
			<th><?php echo $this->Paginator->sort('damage'); ?></th>
			<th><?php echo $this->Paginator->sort('damagestring'); ?></th>
			<th><?php echo $this->Paginator->sort('critical'); ?></th>
			<th><?php echo $this->Paginator->sort('special'); ?></th>
			<th><?php echo $this->Paginator->sort('dmgadjust'); ?></th>
			<th><?php echo $this->Paginator->sort('dmgreduced'); ?></th>
			<th><?php echo $this->Paginator->sort('overheal'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($swings as $swing): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($swing['Encounter']['title'], array('controller' => 'encounters', 'action' => 'view', $swing['Encounter']['id'])); ?>
		</td>
		<td><?php echo h($swing['Swing']['stime']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['attacker']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['swingtype']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['attacktype']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['damagetype']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['victim']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['damage']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['damagestring']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['critical']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['special']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['dmgadjust']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['dmgreduced']); ?>&nbsp;</td>
		<td><?php echo h($swing['Swing']['overheal']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $swing['Swing']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $swing['Swing']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $swing['Swing']['id']), array(), __('Are you sure you want to delete # %s?', $swing['Swing']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Swing'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
