<div class="swings view">
<h2><?php echo __('Swing'); ?></h2>
	<dl>
		<dt><?php echo __('Encounter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($swing['Encounter']['title'], array('controller' => 'encounters', 'action' => 'view', $swing['Encounter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stime'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['stime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attacker'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['attacker']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Swingtype'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['swingtype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attacktype'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['attacktype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damagetype'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['damagetype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Victim'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['victim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damage'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['damage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damagestring'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['damagestring']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Critical'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['critical']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['special']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dmgadjust'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['dmgadjust']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dmgreduced'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['dmgreduced']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overheal'); ?></dt>
		<dd>
			<?php echo h($swing['Swing']['overheal']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Swing'), array('action' => 'edit', $swing['Swing']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Swing'), array('action' => 'delete', $swing['Swing']['id']), array(), __('Are you sure you want to delete # %s?', $swing['Swing']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Swings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Swing'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Encounters'), array('controller' => 'encounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Encounter'), array('controller' => 'encounters', 'action' => 'add')); ?> </li>
	</ul>
</div>
