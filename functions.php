<?php
	function parametro($variable){
		if(isset($GLOBALS[$variable])){
			echo $GLOBALS[$variable];
		}
		else{
			echo "Sin dato cargado: " . $variable;
		}
	}
	
	$anio = date('Y');
?>