<?php 
// Programación lineal
$a = 30;
$b = 20;
$c = $a + $b;
echo "La suma en programacion lineal es: ".$c;

// Programación estructurada

function sumar($a, $b) {
	return $a+$b;
}
echo "La suma en programacion estructurada es: ".sumar(30,40);

// Programación orientada a objetos

class Suma {
	private $a;
	private $b;
	public function getSuma(){
		return $this->a + $this->b;
	}
	public function setSuma($a,$b){
		$this->a = $a;
		$this->b = $b;
	}
}
$s1 = new Suma;
$s1->setSuma(50,30);
echo "La suma en programacion orientada a objetos es: ".$s1->getSuma();



	
 ?>