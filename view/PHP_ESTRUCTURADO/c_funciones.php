<?php

	function devolvermensaje(){
		$mensaje="<h3>FUNCIONES</h3>Esto es un mensaje devuelto desde una funcion";
		return $mensaje;
	}

	echo devolvermensaje();


	function sumar($a=3,$b=6){
		return "<br>La suma desde la funcion es: ".($a + $b);
	}

	echo "<br><br>la funcion con los valores por defecto";
	var_dump(sumar());
	echo sumar(3,2);

	function validarentero($x){
		if($x<0){
			$c= "El numero ".$x." es negativo";
		}else{
			$c= "No es entero";
		}
		return $c;
	}

	echo "<br><h3>la funcion Validar numero entero:</h3><br>";
	echo validarentero(-2);
?>