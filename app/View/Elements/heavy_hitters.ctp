<h2>Heavy Hitters</h2>
<?php
  $swings = $this->requestAction(
    'swings/index/sort:damage/direction:desc/limit:5'
  );
?>
<ol>
	<?php foreach ($swings as $swing): ?>
		<li><?php echo $swing['Swing']['damage']; ?> - 
		<?php var_dump($swing['Attacker']); ?> - 
		<?php var_dump($swing['Victim']); ?></li>
	<?php endforeach; ?>
</ol>