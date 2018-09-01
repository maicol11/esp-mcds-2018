<?php 

$num = 1000;
$fact = 1;
$cont = 1;

while ($cont <= $num) {
	
	$fact = $fact * $cont;
	echo $cont."! = ".$fact."<br>";
	$cont++;
}

 ?>