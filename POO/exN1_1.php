<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POO ex1 nivel 1</title>
</head>
<body>

<?php 
$max = 6000;
class Employee {
	//atributos
	private $nombre;
	private $nomina;
	//metodos
	public function initialize ($nom,$sueldo){	
		$this -> nombre=$nom;
		$this -> nomina=$sueldo;
		} 
	public function print (){
		if ($sueldo < $max){
		echo $this->nombre;
		echo " tiene que pagar impuestos.";


	}
		else ($sueldo >= $max){
		echo $this->nombre;
		echo " no tiene que pagar impuestos.";
	}
	
	}
}
	$empleado = new Employee();
	$empleado->initialize("Joan",18000);
	$empleado->print();
 ?>

</body>
</html>