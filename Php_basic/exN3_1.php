<?php 
$texto = "texto de prueba para dividir arrays";
echo ("este es el texto en formato string: ".$texto);
echo "<br>";
// function para quitar espacios vacios
function espacios($var){ 
    return ($var !== NULL && $var !== FALSE && $var !== " ");
}
$arr_txt = str_split($texto); //tranforma string en array
$arr_txt2 = array_filter( $arr_txt, "espacios"); //elimina espacios vacios
$arr_txt2 = array_values($arr_txt2); //reorganiza index array
$num_car = sizeof($arr_txt2); //numero caracteres
echo "el texto tranformado en array y quitando espacios queda asi: ";	
for ($i = 0;  $i <= $num_car; $i++)
{
	print_r($arr_txt2[$i]);
}
 ?>