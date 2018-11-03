<?php
	
	$file = @file('texto.txt') or die("Error al cargar");
	var_dump($file);
?>