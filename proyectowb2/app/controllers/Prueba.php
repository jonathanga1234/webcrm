<?php
	$url		= "http://localhost:3000/tasks";
	$contents	= file_get_contents($url);
	$contents	= utf8_encode($contents);
	$results	= json_decode($contents, true);
	$info		= $results;
	foreach ($info as $r) {
		echo "Nome: $r[nombre] <br />";
	}
?>

/*
Resultado:

Nome: Kelvin
Nome: Bolado
Nome: Vou consumir com PHP
*/