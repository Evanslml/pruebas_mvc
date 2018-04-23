<?php

$_nombre = $_POST['nombre'];
$_password = $_POST['password'];
$__sesion = $_POST['sesion'];


if(isset($_nombre) and isset($_password)){ // SI ESTAN DEFINIDAS LAS VARIABLES

	if(empty($_nombre) OR empty($_password)){ //SI UNA DE LAS VARIABLES ES VACIA
		header('location: login.php?error=1');
	}else{
		if($_nombre=='EVANS' AND $_password="123"){
			session_start(); //Inicializa la sesion por primera vez;
				if($__sesion==1){
					ini_set(session.cookie_lifetime,time()+(60*60*24))	; //duracion de 1 dia 
				}
			$_SESSION['usuario'] = $_nombre;
			header('location: accedido.php');
		}else{
			header('location: login.php?error=2');
		}
	}
}else{
	header('location: login.php?error=3');
}





?>