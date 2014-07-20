<h2>Heavy Hitters</h2>
<?php
  $swings = $this->requestAction(
    'swings/index/sort:damage/direction:asc/limit:5'
  );
?>
<ol>
	<?php foreach ($swings as $swing): ?>
		  <li><?php echo $swing['Swing']['damage']; ?></li>
	<?php endforeach; ?>
</ol>