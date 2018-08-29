<?php 

class Autor {

	private $nombre;
	private $email;

	public function __construct($n,$e){
		$this->nombre 	= 	$n;
		$this->email 	= 	$e;
	}
	
	public function getNombre(){
		return $this->nombre;
	}

	public function getEmail(){
		return $this->email;
	}

}

class Libro {
	private $autores = array();
	private $nombre;
	private $precio;

	public function __construct($n, $p){
		$this->nombre = $n;
		$this->precio = $p;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function adicionarAutor($nombre, $email) {
		$this->autores[] = new 	Autor($nombre, $email);
	}

	public function getAutores() {
		return $this->autores;
	}
}

$libro1 = new Libro("Patrones GOF", 50);
$libro1->adicionarAutor("Erich Gamma   ",   "erich@gmail.com");
$libro1->adicionarAutor("Richard Helm  ",	"richard@gmail.com");
$libro1->adicionarAutor("John Vlissides", 	"john@gmail.com");
$libro1->adicionarAutor("Ralph Johnson ",  	"ralph@gmail.com");
echo "El nombre del libro es: ".$libro1->getNombre()." Precio: $".$libro1->getPrecio()."<br>";
echo "Autores: <br>";
foreach ($libro1->getAutores() as $autor) {
	echo "- ".$autor->getNombre()."<br>";
}

$libro2 = new Libro("100 años de soledad", 30);
$libro2->adicionarAutor("Gabriel Garcia Marquez", "gabo@gmail.com");
echo "<br>El nombre del libro es: ".$libro2->getNombre()." Precio: $".$libro2->getPrecio()."<br>";
$autor = $libro2->getAutores();
echo "Autor: ".$autor[0]->getNombre();


 ?>