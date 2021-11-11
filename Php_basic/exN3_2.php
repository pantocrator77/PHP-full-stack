<?php  
$arr1 = array (. //array multidimensional donde el segundo valor es el numero de veces que se repite, de default es 1
	array ("lorenzo",1),
	array ("juan",1),
	array ("cristina",1),
	array ("lorenzo",1),
	array ("cristina",1),
	array ("lorenzo",1),
	array ("andrea",1),

)
$max = sizeof($arr1);  //tamano array para cerrar el bucle
for ($i = 0; $i < $max; $i++){
	$busca = $arr1[i]; //posición del contenido del array que se tiene que comprar con los otros
	$existe = array_search( $busca, $arr1);  // comprara el elemento con posicion "i" con el resto del array
	if ($existe == true) {
		$arr1[0][1] = $arr1[0][1]+1; //añade una unidad a la segunda columna cuando es repetido
	}
}
for ($i = 0; $i < $max; $i++){
$arr1[i][i2]
?>