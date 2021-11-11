<?php  

echo "cuenta usando una funcion con parametro por defecto: ";
echo "<br>";

function cuenta ($max = 10){
	for ($i = 1;  $i <= $max; $i++)

{
	$i = $i+1;
	echo $i;
	echo "<br>";
}
}
cuenta();

?>