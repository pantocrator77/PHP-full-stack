<?php 
//contador de tiros
$i=0;
//Clase
class PokerDice {
	//atributos: caras del dado
	$caras array{"As", "K", "Q", "J", "7", "8"};
	
	//metodos tira el dado
	public function throw (){
		$this->tiro=rand(0,5);
		$i = $i++;
		}
	//metodo muestra resultado
	public function shapeName (){
		$this->resultado = $caras[$tiro];
		echo $this->resultado; 
		$i = $i++;
	public function getTotalThrow() {
		echo "has tirado ".$this->$i." veces";
	}
}
if ($i<=5){
$tirar = new PokerDice();
$tirar = throw();
$tirar = shapeName();
$tirar = print();
}
 ?>
