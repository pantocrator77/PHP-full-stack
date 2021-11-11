<?php  

echo "cuenta usando una funcion: ";
echo "<br>";

function cuenta ($max){
	for ($i = 1;  $i <= $max; $i++)

{
	$i = $i+1;
	echo $i;
	echo "<br>";
}
}
cuenta(10);

?>