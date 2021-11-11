<?php 
function isBitten ($prob){
	global $bite;
	if ($prob <= 50){ //si el numero random es menor o igual a 50, la variable es true 
		$bite = true;
		//echo "true";
	}
	if ($prob > 50){ //si el numero random es superior a 50, la variable es false
		$bite = false;
		//echo "false";
	}
	return $bite;
}
$prob = rand (1, 100); //general numero entre 1 y 100
isBitten($prob); // llama la funcion con el valor generado de forma random
echo "I have been bitten by Charlie: ";
if ($bite == true){
	echo "true";
}
else if ($bite == false){
	echo "false";
}

?>