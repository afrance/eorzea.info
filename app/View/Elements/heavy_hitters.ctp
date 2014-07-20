<h2>Heavy Hitters</h2>
<?php
  $swings = $this->requestAction(
    'swings/index/sort:damage/direction:desc/limit:5'
  );
?>
<ol>
	<?php foreach ($swings as $swing): ?>
		<?php printf("<li>%s - %s - %s</li>",  $swing['Swing']['damage'], $swing['Attacker']['name'], $swing['Victim']['name']); ?>
	<?php endforeach; ?>
</ol>