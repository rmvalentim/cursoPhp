<?php 

	$dt = new Datetime();

	$periodo = new Dateinterval("P15D"); // intervalo de 15 dias

	echo $dt->format("d/m/y H:i:s");

	$dt->add($periodo);

	echo "</br>";

	echo $dt->format("d/m/y H:i:s");

 ?>