<?php 

interface Forma {
	public function getArea();
}

class Circulo implements Forma {
	private $radio;
	public function __construct($r) {
		$this->radio = $r;
	}
	public function getArea() {
		return ($this->radio * $this->radio) * pi();
	}

}

class Rectangulo implements Forma {
	private $altura;
	private $base;	
	public function __construct($a, $b) {
		$this->altura 	= $a;
		$this->base 	= $b;
	}
	public function getArea(){
		return $this->base * $this->altura;
	}
}

$circulo = new Circulo(6);
$rectanculo = new Rectangulo(5,3);
echo "El área del círculo es: ".round($circulo->getArea());
echo "<br>El área de un rectángulo es: ".$rectanculo->getArea();







 ?>