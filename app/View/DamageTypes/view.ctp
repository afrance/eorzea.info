<div class="damageTypes view">
<h2><?php echo __('Damage Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encounter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($damageType['Encounter']['title'], array('controller' => 'encounters', 'action' => 'view', $damageType['Encounter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Combatant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($damageType['Combatant']['name'], array('controller' => 'combatants', 'action' => 'view', $damageType['Combatant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grouping'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['grouping']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Starttime'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['starttime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endtime'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['endtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damage'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['damage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encdps'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['encdps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chardps'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['chardps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dps'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['dps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Average'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['average']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Median'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['median']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minhit'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['minhit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maxhit'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['maxhit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hits'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['hits']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crithits'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['crithits']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blocked'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['blocked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Misses'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['misses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Swings'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['swings']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tohit'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['tohit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Averagedelay'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['averagedelay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Critperc'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['critperc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parrypct'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['parrypct']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blockpct'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['blockpct']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overheal'); ?></dt>
		<dd>
			<?php echo h($damageType['DamageType']['overheal']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Damage Type'), array('action' => 'edit', $damageType['DamageType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Damage Type'), array('action' => 'delete', $damageType['DamageType']['id']), array(), __('Are you sure you want to delete # %s?', $damageType['DamageType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Damage Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Damage Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Combatants'), array('controller' => 'combatants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Combatant'), array('controller' => 'combatants', 'action' => 'add')); ?> </li>
	</ul>
</div>
