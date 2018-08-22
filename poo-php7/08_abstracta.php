<?php 

abstract class Fruta {
	protected $nombre;
	protected $color;
	protected $precio;

	public function __construct($n, $c, $p){
		$this->nombre 	= $n;
		$this->color 	= $c;
		$this->precio 	= $p;
	}

	abstract public function getInfo();
}
class Manzana extends Fruta {

	public function getInfo() {
		return "Nombre: ".$this->nombre."<br> Color: ".$this->color. "<br> Precio: ".$this->precio."<br><br>";
	}
}

class Pera extends Fruta {
	public function getInfo() {
		return "Nombre: ".$this->nombre."<br> Color: ".$this->color. "<br> Precio: ".$this->precio."<br><br>";
	}
}

// Error: las clases abstractas no se pueden instanciar $fruta1 = new Fruta;
$fruta1 = new Manzana("Manzana", "Verde", 500);
echo $fruta1->getInfo();

$fruta2 = new Pera("Pera", "Verde", 250);
echo $fruta2->getInfo();

 ?>