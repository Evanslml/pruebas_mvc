<?php
	$view =new Smarty(0);

	if(isset($_POST['ej']))
	{
		$view->assign(array('formulario'=>'ha enviado el formulario'));
	}else
	{
		$view->assign(array('formulario'=>'no se ha enviado'));
	}

	
	$view->display('home.tpl');

	
?>