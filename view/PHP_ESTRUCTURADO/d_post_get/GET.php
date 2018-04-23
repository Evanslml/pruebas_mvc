<?php

$_nombre = $_GET['nombre'];
$_password = $_GET['password'];

echo "El nombre es:".$_nombre."<br>";
echo "El Password es:".$_password."<br>";

if(empty($_nombre) OR empty($_password)){ //SI UNA DE LAS VARIABLES ES VACIA
	echo "<b>Los dos campos deben estar llenos</b><br>";	      
}else{
	if($_nombre=='EVANS' AND $_password="123"){
		echo "<b>Usuario se logueo correctamente</b><br>";
	}else{
		echo "<b>No puede ingresar al sistema</b>";
	}
}

?>