<div class="importResults view">
<h2><?php echo __('Import Result'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encounter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($importResult['Encounter']['title'], array('controller' => 'encounters', 'action' => 'view', $importResult['Encounter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Original Encid'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['original_encid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Combatants Found'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['combatants_found']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Combatants Added'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['combatants_added']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Combatants Removed'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['combatants_removed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Swings Found'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['swings_found']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Swings Added'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['swings_added']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Swings Removed'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['swings_removed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attacktypes Found'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['attacktypes_found']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attacktypes Added'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['attacktypes_added']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attacktypes Removed'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['attacktypes_removed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damagetypes Found'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['damagetypes_found']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damagetypes Added'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['damagetypes_added']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damagetypes Removed'); ?></dt>
		<dd>
			<?php echo h($importResult['ImportResult']['damagetypes_removed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Import Result'), array('action' => 'edit', $importResult['ImportResult']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Import Result'), array('action' => 'delete', $importResult['ImportResult']['id']), array(), __('Are you sure you want to delete # %s?', $importResult['ImportResult']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Import Results'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Import Result'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
