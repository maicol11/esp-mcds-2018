<?php 

// Clase: conjunto atrivutos y metodos
class Animal {
	// Atributes: propiedades del objeto
	public $nombre;
	public $edad;
	public $peso;
	// Métodos: funcionalidad del objeto
	public function correr(){
		echo "\nEsta corriendo...";
	}
	public function comer(){
		echo "\nEsta comiendo...";
	}
	public function dormir(){
		echo "\nEsta dormiendo...";
	}

}
// Instanciando el objeto Animal
 $an1 = new Animal;
 $an1->correr();
 $an1->comer();
 $an1->dormir();


 ?>