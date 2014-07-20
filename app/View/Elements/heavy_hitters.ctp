<h2>Heavy Hitters</h2>
<?php
  $swings = $this->requestAction(
    'swings/index/sort:damage/direction:desc/limit:5'
  );
?>
<ol>
	<?php foreach ($swings as $swing): ?>
		<li><?php echo $swing['Swing']['damage']; ?></li>
		<li><?php var_dump($swing['Attacker']['name']); ?></li>
		<li><?php var_dump($swing['Victim']['name']); ?></li>
	<?php endforeach; ?>
</ol>