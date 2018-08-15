<?php 
class ClubesFutbol {
	
	public $nombre;
	public $nacionalidad;
	public $mejorDelPais;


	public function setValores($nombre, $nacionalidad, $mejorDelPais){
		$this->nombre = $nombre;
		$this->nacionalidad = $nacionalidad;
		$this->mejorDelPais = $mejorDelPais;

	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getNacionalidad(){
		return $this->nacionalidad;
	}
	public function getMejorDelPais(){
		return $this->mejorDelPais;
	}

}

$eq1 = new ClubesFutbol;
$eq1->setValores("Barcelona", "España", "Messi");
echo "El equipo es: ".$eq1->getNombre()." La nacionalidad es: ".$eq1->getNacionalidad()." El mejor jugador del pais es: ".$eq1->getMejorDelPais();

$eq2 = new ClubesFutbol;
$eq2->setValores("Real Madrid", "España", "Messi");
echo "\nEl equipo es: ".$eq2->getNombre()." La nacionalidad es: ".$eq2->getNacionalidad()." El mejor jugador del pais es: ".$eq2->getMejorDelPais();

$eq3 = new ClubesFutbol;
$eq3->setValores("Granada FC", "España", "Messi");
echo "\nEl equipo es: ".$eq3->getNombre()." La nacionalidad es: ".$eq3->getNacionalidad()." El mejor jugador del pais es: ".$eq3->getMejorDelPais();





?>