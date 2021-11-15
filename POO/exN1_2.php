<?php 
class Shape {
	//atributos
	//private $height;
	//private $width;
	// metodos
		public function size ($ht,$wid){	
			$this -> alto=$ht;
			$this -> ancho=$wid;
		}
}
class Triangle extends Shape {
		public function area(){
			$this->resultado=$this->alto*$this->ancho/2;
		}
} 
}
class Rectangle extends Shape {
		public function area(){
		$this->resultado=$this->alto*$this->ancho;
		} 
}
//creacion e inicializacion de objetos triangulo y rectangulo
$tria = new Triangle();
$tria->area(12,24);
$tria->print();
$rect = new Rectangle();
$rect->area(12,24);
$rect->print();
 ?>