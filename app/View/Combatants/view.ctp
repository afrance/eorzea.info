<div class="combatants view">
<h2><?php echo __('Combatant'); ?></h2>
	<dl>
		<dt><?php echo __('Encounter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($combatant['Encounter']['title'], array('controller' => 'encounters', 'action' => 'view', $combatant['Encounter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ally'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['ally']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Starttime'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['starttime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endtime'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['endtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damage'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['damage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damageperc'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['damageperc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kills'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['kills']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Healed'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['healed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Healedperc'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['healedperc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Critheals'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['critheals']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heals'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['heals']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curedispels'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['curedispels']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Powerdrain'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['powerdrain']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Powerreplenish'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['powerreplenish']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dps'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['dps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encdps'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['encdps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enchps'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['enchps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hits'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['hits']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crithits'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['crithits']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blocked'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['blocked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Misses'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['misses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Swings'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['swings']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Healstaken'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['healstaken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damagetaken'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['damagetaken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deaths'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['deaths']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tohit'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['tohit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Critdamperc'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['critdamperc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crithealperc'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['crithealperc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Threatstr'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['threatstr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Threatdelta'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['threatdelta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parrypct'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['parrypct']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blockpct'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['blockpct']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inctohit'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['inctohit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overhealpct'); ?></dt>
		<dd>
			<?php echo h($combatant['Combatant']['overhealpct']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Combatant'), array('action' => 'edit', $combatant['Combatant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Combatant'), array('action' => 'delete', $combatant['Combatant']['id']), array(), __('Are you sure you want to delete # %s?', $combatant['Combatant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Combatants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Combatant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
