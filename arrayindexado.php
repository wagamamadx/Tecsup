<?php

$personas =  ['juan','pedro','carlos'];
var_dump($personas);

//añadiendo elemento al array
$personas[] = 'Maria';
var_dump($personas);

//imprimir datos de array

echo $personas[2].'<br/>';

//editar array

$personas[2]='Caloncho';
var_dump($personas);

// Eliminar 
unset($personas[3]);
var_dump($personas);


foreach ($personas as $per) {
	echo "Holi ".$per."<br/>";	
}







?>