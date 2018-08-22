<?php 

class Operacion {
	protected $num1;
	protected $num2;

	public function __construct($num1, $num2){
		$this->num1 = $num1;
		$this->num2 = $num2;

	}
}

class Suma extends Operacion {
	
	public function getResultado(){
		return $this->num1 + $this->num2;
	}
}

class Resta extends Operacion {
	
	public function getResultado(){
		return $this->num1 - $this->num2;
	}
}

class Multiplicacion extends Operacion {
	
	public function getResultado(){
		return $this->num1 * $this->num2;
	}
}

class Division extends Operacion {
	
	public function getResultado(){
		return $this->num1 / $this->num2;
	}
}


$op1 = new Suma(10,5);
echo "La suma es: ".$op1->getResultado();

$op2 = new Resta(75,35);
echo "<br>La resta es: ".$op2->getResultado();

$op3 = new Multiplicacion(8,7);
echo "<br>La multiplicación es: ".$op3->getResultado();

$op4 = new Division(8,7);
echo "<br>La división es: ".$op4->getResultado();

 
 ?>