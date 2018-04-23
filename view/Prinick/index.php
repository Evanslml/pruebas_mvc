<?php
//https://www.smarty.net/
//Smarty es un motor de plantillas para PHP, es decir, separa el código PHP, como lógica de negocios, del código HTML, como lógica de presentación,
//Editar las variables
//compile_dir
//template_dir
//Se configuro el __construct


include "includes/comunes.php";
require "includes/class.Conexion.php";
//$db = new conexion(); 

$modo = isset($_GET['modo']) ?  $_GET['modo'] : 'default';

switch($modo){
	case 'login':
		if(isset($_POST['login'])){
			if(!empty($_POST['nombre']) and !empty($_POST['password']) ){
				include('includes/class.Acceso.php');
				$login =new Acceso($_POST['nombre'],$_POST['password'],'');
				$login ->Login();
			}else{
				header('location: index.php?error=camposVacios');
			}
		}else{
			header('location: index.php');
		}
	break;
	case 'registro':

		if(isset($_POST['registro'])){
			if( !empty($_POST['nombre']) and !empty($_POST['email']) and !empty($_POST['password']) ){ 
				include('includes/class.Acceso.php');
				$registro =new Acceso($_POST['nombre'],$_POST['password'],$_POST['email']);
				$registro->Registro();
			}else{
				header('location: index.php?modo=registro&error=campos_vacios');
			}

		}	else if(isset($_GET['error']) and $_GET['error'] == 'campos_vacios'){
				$template = new Diris(0);
				$template->assign(array('error'=>'ERROR: Debes llenar los campos'));
				$template->display('public/registro.tpl');
			
			}else if(isset($_GET['error']) and $_GET['error'] == 'usuario_usado'){
				$template = new Diris(0);
				$template->assign(array('error'=>'ERROR: El usuario ya esta registrado'));
				$template->display('public/registro.tpl');	
			
			}else if(isset($_GET['error']) and $_GET['error'] == 'email_usado'){
				$template = new Diris(0);
				$template->assign(array('error'=>'ERROR: El correo ya esta siendo usado'));
				$template->display('public/registro.tpl');	
			} else if(isset($_GET['error']) and $_GET['error'] == 'email_user_usado'){
				$template = new Diris(0);
				$template->assign(array('error'=>'ERROR: El correo y el usuario ya estan siendo usado'));
				$template->display('public/registro.tpl');	
			} 
			else{
				$template = new Diris(0);
				$template->display('public/registro.tpl');
			}
	break;

	case 'claveperdida':

		if(isset($_POST['email'])){
			if(!empty($_POST['email'])){
				include('includes/class.Acceso.php');
				$recuperar = new Acceso('','',$_POST['email']);
				$recuperar->clavePerdida();
			}else{
				header('location: index.php?modo=claveperdida&error=campos_vacio');
			}

		}else if(isset($_GET['error']) and $_GET['error'] =='campos_vacio'){
			$template = new Diris(0);
			$template->assign(array('error'=>'ERROR: Debes llenar el campo de email'));
			$template->display('public/claveperdida.tpl');
		}else if(isset($_GET['error']) and $_GET['error'] =='email_inexistente'){
			$template = new Diris(0);
			$template->assign(array('error'=>'ERROR: El email que has ingresado no existe'));
			$template->display('public/claveperdida.tpl');
		}else if(isset($_GET['succes']) and $_GET['succes'] =='ok'){
			$template = new Diris(0);
			$template->assign(array('error'=>'Muy bien se cambio la contraseña'));
			$template->display('public/claveperdida.tpl');
		}else{
			$template = new Diris(0);
			$template->display('public/claveperdida.tpl');
		}

	break;

	default:

	if(isset($_GET['error']) and $_GET['error'] =='camposVacios'){

		$template = new Diris(0);
		$template->assign(array('error'=>'ERROR: Debes llenar los campos'));
		$template->display('public/index.tpl');

	} else if(isset($_GET['error']) and $_GET['error'] =='datosIncorrectos'){

		$template = new Diris(0);
		$template->assign(array('error'=>'ERROR: Datos Incorrectos'));
		$template->display('public/index.tpl');

	}else if(isset($_GET['error']) and $_GET['error'] =='acceso'){

		$template = new Diris(0);
		$template->assign(array('error'=>'ERROR: La sesion ha caducado o no has iniciado'));
		$template->display('public/index.tpl');

	}else{
	
	$template = new Diris(0);
	$template->display('public/index.tpl');
	
	}
	break;
}






?>