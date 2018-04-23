<?php


class Segunda extends Primera //Tambien esta heredando el contrsuctor y atributos de la clase padre
{

	public function Imprimir(){
		echo "Parametro 1: ",$this->algo,"<br>";
		echo "Parametro 2: ",$this->algodos,"<br>";
	}
}


/**
* 
*/
class Imprimir extends Calcular
{
	public function Sumar(){  
		parent::Sumar();  //Se accede al metodo sumar de la clase padre
		echo "El resultado es igual a: ",$this->resultado;
	}
}


?>