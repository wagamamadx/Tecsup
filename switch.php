<?php

$dia = date('w');
var_dump($dia);

switch($dia) {

	case 0:
		echo "Dia Domingo";
		break;
	case 1:
		echo "Dia Lunes";
		break;
	case 2:
		echo "Dia Martes";
		break;
	case 3:
		echo "Dia Miercoles";
		break;
	default:
		echo "Es otro dia";
		break;

}

?>