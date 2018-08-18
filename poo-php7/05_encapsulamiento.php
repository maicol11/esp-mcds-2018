<?php 
class Usuario {
	private $nombre;
	private $genero;

	public function setNombre($n){
		$this->nombre = $n;
	}

	public function setGenero($g){
		$this->genero = $g;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getGenero(){
		return $this->genero;
	}
}

$user = new Usuario;
$user->setNombre("Maicol");
$user->setGenero("Masculino");
echo "El nombre del usuario es: ".$user->getGenero()." Su genero es: ".$user->getGenero();

$user2 = new Usuario;
$user2->setNombre("Natalia");
$user2->setGenero("Femenino");
echo "<br> El nombre del usuario es: ".$user2->getGenero()." Su genero es: ".$user2->getGenero();





 ?>