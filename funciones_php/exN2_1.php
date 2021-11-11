<?php 
echo "Los años de los juegos olimpicos entre 1960 y 2016 son:"."<br>";
function calcula ($first,$last){
	for ($i = $first; $i <= $last; $i+=4){
		echo $i;
		echo "<br>";
}
}
calcula (1960,2016); // llamada a la funcion con los valores de primer y ultimo año
 ?>

