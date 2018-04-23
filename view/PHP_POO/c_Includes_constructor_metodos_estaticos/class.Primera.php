<?php

include "class.Segunda.php";

class Primera 
{
	protected $algo;
	protected $algodos;

	public function __construct($parametro1, $parametro2) //puede estar en public o no 
	{
		$this->algo=$parametro1;
		$this->algodos=$parametro2;
	}

}


class Calcular 
{
	protected $num;
	protected $num2;
	protected $resultado;
	
	function __construct($a,$b) //Las funciones pueden anteponerse o no pulbic el funcionamiento es el mismo
	{
		$this->num=$a;
		$this->num2=$b;
	}

	public function Sumar(){
		$this->resultado = $this->num + $this->num2;
		return $this->resultado;
	}
}




class Estatico
{
	private  $propiedad;
	
	function __construct($parametro)
	{
		$this->propiedad = $parametro;
	}

	public function Impreso(){
		return $this->propiedad;
	}

	public static function ImpresoDos($algo){ //Pedes acceder sin neceisad de invocar la clase, ni crear el objeto
		return $algo; //no puede retornar $this->propiedad;
	}

}








?>