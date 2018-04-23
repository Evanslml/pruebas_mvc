<?php

session_start(); //Rescata que session esta activa

if(isset($_SESSION['usuario'])){ //SI ESTA DEFINIDO

		echo "Bienvenido ".$_SESSION['usuario']." a esta nueva sesion ";
	
	}else if(!isset($_SESSION['usuario'])){
		session_start(); //para ver que sesion existe
		session_destroy(); // la destruimos
		header('location: login.php');
	}

?>