<?php
$var1 = array(6,9,14,5,6);
$var2 = array(3,12,17);
// añade un valor
$var2[3] = 32;
echo "el nuevo elemento añadido al array es ".$var2[3];
echo "<br>";
//mezcla los 2 arrays
$resultado = array_merge($var1, $var2);
echo "el resultado de la mezcla de los dos arrays es :    ";
var_dump($resultado);
echo "<br>";
echo "el contenido individual de los arrays es:";
echo "<br>";
//routine para imprimir todos los elementos del array uno a uno
for ($i = 0; $i <= 8; $i++){
var_dump($resultado[$i]);
echo "<br>";
}
?>