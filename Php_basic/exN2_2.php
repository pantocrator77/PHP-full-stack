<?php 
$str1 = "abcd";
$str2 ="ef";
$str3 = "hifg";
$arr_str1 = str_split($str1); //tranforma string en array
$num_car = sizeof($arr_str1); //encuentra numero de caracteres
$num_car = $num_car - 1; // quita una unidad para que coincida con el index array
$intercambio = $arr_str1[0]; // copia primer caracter en la varible de intercambio
$arr_str1[0] = $arr_str1[$num_car]; // copia valor ultima en la primera
$arr_str1[$num_car] = $intercambio; // intercambia valor  ultima con primera usando la variable de intercambio
	for ($i = 0;  $i <= $num_car; $i++) //bucle para imprimir todos los caracteres
{
	print_r($arr_str1[$i]);
}
echo("<br>");

$arr_str2 = str_split($str2);
$num_car = sizeof($arr_str2);
$num_car = $num_car - 1;
$intercambio = $arr_str2[0];
$arr_str2[0] = $arr_str2[$num_car];
$arr_str2[$num_car] = $intercambio;
	for ($i = 0;  $i <= $num_car; $i++)
{
	print_r($arr_str2[$i]);
}
echo("<br>");

$arr_str3 = str_split($str3);
$num_car = sizeof($arr_str3);
$num_car = $num_car - 1;
$intercambio = $arr_str3[0];
$arr_str3[0] = $arr_str3[$num_car];
$arr_str3[$num_car] = $intercambio;
	for ($i = 0;  $i <= $num_car; $i++)
{
	print_r($arr_str3[$i]);
}
echo("<br>");

