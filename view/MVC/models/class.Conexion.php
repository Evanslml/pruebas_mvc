<?php 
class Conexion extends mysqli{
 	
 	public function __construct(){
 		parent::__construct('localhost','root','','pruebas_mvc');
 		$this->query("SET NAMES 'utf8'");
 		$this->connect_errno ? die('Error en la conexion') : $x = 'Conectado';
 		//echo $x;
 		//unset($x);
 	}


 	public function recorrer($y){
 		return mysqli_fetch_array($y);
 	}

 	public function rows($y){
 		return mysqli_num_rows($y);
 	}
}


?>