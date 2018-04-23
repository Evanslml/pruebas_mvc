<?php
//https://www.smarty.net/
//Smarty es un motor de plantillas para PHP, es decir, separa el código PHP, como lógica de negocios, del código HTML, como lógica de presentación,
//Editar las variables
//compile_dir
//template_dir
//Se configuro el __construct


include "includes/comunes.php";

$template = new Diris(0);
$template->assign(
	array(
	'variable1' => 'hola todo bien',
	'variable2' => 'hola soy variable 2'
	)
);
$template->display('public/demo.tpl');

echo "ejemplo de strlen ".strlen('Hola  Pedro');

echo "<br>",mt_rand(0,8);

/*
class GenerarPass
{
	private $cadena;
	private $longitud;
	private $passw;

	public function __construct(){
		$this->cadena ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$this->passw = '';
	}

	public function NuevaPass($long){
		$lng_cadena = strlen($this->cadena);
		$this->longitud = $long;

		for($x=1; $x<=$this->longitud;$x++){
			$aleatorio = mt_rand(0,$lng_cadena-1);
			$this->passw .=substr($this->cadena,$aleatorio,1);
		}

		return $this->passw;
	}
}


$nueva =new GenerarPass();
echo $nueva ->NuevaPass(10);
*/
?>