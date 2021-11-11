<?php  
global $coste;
function llamada ($min){
	if ($min < 3)  {
		$coste = 10;
		
	}
	elseif ($min > 3) {
		$coste = 10;
		$extra= $min-3;
		$extra = $extra * 5;
		$coste = $coste + $extra;
		echo $coste;
		
	}
}
llamada(5);

?>