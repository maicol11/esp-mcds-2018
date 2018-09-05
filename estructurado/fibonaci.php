<?php 

$n = 0;
$sig = 1;
$lim = 5;

while ($i <= $lim) {
	echo $n;
	$aux = $sig;
	$sig += $n;
	$n = $aux;
	$i++;
}


	
 ?>