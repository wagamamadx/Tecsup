<?php 
$calquiler=30;
$exc=0.40;
$rmaximo=2000;
$total=null;
$ndias=rand(1,7);
$kmrecorridos=rand(2000,3000);
var_dump($ndias);
var_dump($kmrecorridos);

if ($ndias!=null) {
	$total=(($calquiler*$ndias)+(($kmrecorridos-$rmaximo)*$exc));
	echo "Monto a pagar por ".$ndias." es $:".$total."<br/>";
	echo "Recorrido excedente es KM.".($kmrecorridos-$rmaximo)." <br/>costo excedente es $:".(($kmrecorridos-$rmaximo)*$exc);
}

?>