<?php  
function ev($nota){
	
	echo "La nota es ".$nota.",  ";
	if (($nota < 100) && ($nota >= 60)) {
	echo "es un estudiante de primera";
	}
	if (($nota < 60) && ($nota >= 45)) {
	echo "es un estudiante de segunda";
	}
	if (($nota < 45) && ($nota >= 33)) {
	echo "es un estudiante de tercera";
	}
	if (($nota < 33) && ($nota > 0)) {
	echo "el estudiante tiene que repetir";
	}

}
ev(32);

?>