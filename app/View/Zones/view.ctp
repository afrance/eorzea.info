<div class="zones view">
<h2><?php echo __('Zone'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($zone['Zone']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($zone['Zone']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Zone'), array('action' => 'edit', $zone['Zone']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Zone'), array('action' => 'delete', $zone['Zone']['id']), array(), __('Are you sure you want to delete # %s?', $zone['Zone']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Encounters'); ?></h3>
	<?php if (!empty($zone['Encounter'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Starttime'); ?></th>
		<th><?php echo __('Endtime'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Damage'); ?></th>
		<th><?php echo __('Encdps'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('Kills'); ?></th>
		<th><?php echo __('Deaths'); ?></th>
		<th><?php echo __('Original Db'); ?></th>
		<th><?php echo __('Original Encid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($zone['Encounter'] as $encounter): ?>
		<tr>
			<td><?php echo $encounter['id']; ?></td>
			<td><?php echo $encounter['title']; ?></td>
			<td><?php echo $encounter['starttime']; ?></td>
			<td><?php echo $encounter['endtime']; ?></td>
			<td><?php echo $encounter['duration']; ?></td>
			<td><?php echo $encounter['damage']; ?></td>
			<td><?php echo $encounter['encdps']; ?></td>
			<td><?php echo $encounter['zone_id']; ?></td>
			<td><?php echo $encounter['kills']; ?></td>
			<td><?php echo $encounter['deaths']; ?></td>
			<td><?php echo $encounter['original_db']; ?></td>
			<td><?php echo $encounter['original_encid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'encounters', 'action' => 'view', $encounter['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'encounters', 'action' => 'edit', $encounter['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'encounters', 'action' => 'delete', $encounter['id']), array(), __('Are you sure you want to delete # %s?', $encounter['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
