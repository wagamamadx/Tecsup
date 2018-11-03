<?php
$es_domingo=true;
$es_de_dia=false;

if ($es_domingo && $es_de_dia) {
	echo "Vamos al parque";
}
else if ($es_domingo && !$es_de_dia) {
	echo "Vemos una pelicula";
}
else if(!$es_domingo && $es_de_dia) {
	echo "Tenemos que trabajar";
}
else{
	echo "En los demas casos estoy estudiando";
}


?>