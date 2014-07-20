<div class="attackTypes view">
<h2><?php echo __('Attack Type'); ?></h2>
	<dl>
		<dt><?php echo __('Encounter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attackType['Encounter']['title'], array('controller' => 'encounters', 'action' => 'view', $attackType['Encounter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attacker'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['attacker']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Victim'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['victim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Swingtype'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['swingtype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Starttime'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['starttime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endtime'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['endtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damage'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['damage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Encdps'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['encdps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chardps'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['chardps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dps'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['dps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Average'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['average']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Median'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['median']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minhit'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['minhit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maxhit'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['maxhit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resist'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['resist']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hits'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['hits']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crithits'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['crithits']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blocked'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['blocked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Misses'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['misses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Swings'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['swings']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tohit'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['tohit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Averagedelay'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['averagedelay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Critperc'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['critperc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parry'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['parry']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parrypct'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['parrypct']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Block'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['block']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blockpct'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['blockpct']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dmgreduced'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['dmgreduced']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overheal'); ?></dt>
		<dd>
			<?php echo h($attackType['AttackType']['overheal']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attack Type'), array('action' => 'edit', $attackType['AttackType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attack Type'), array('action' => 'delete', $attackType['AttackType']['id']), array(), __('Are you sure you want to delete # %s?', $attackType['AttackType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attack Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attack Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
