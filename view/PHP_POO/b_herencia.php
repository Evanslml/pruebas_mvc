<?php

class Automovil 
{

	protected $color;  //Puede ser accedido por las clases hijas
	protected $velocidad;
	protected $motor;

	public function Arrancar($a,$b){
		$this->velocidad = $a; //Variable a se le asigna a la propiedad velocidad sin Dolar
		$this->motor = $b;
		$c= "arranca a la velocidad de ".$this->velocidad." con un motor de ".$this->motor;

		echo $c;
	}

	public function DeterminarColor($color){
		$this->color=$color;
		echo " tiene un color ".$this->color;
	}

	public function Frenar(){  //Tiene que ser publico para que la clase hijo pueda utilizarlo
		$d= " Ha frenado ";
		echo $d;
	}

}



class Moto extends Automovil
{
	private $ruedas;
	
	public function __construct($_color,$_velocidad,$_motor,$_ruedas){ //Necesariamente la clase padre debe ser protected
		$this->color=$_color;
		$this->velocidad=$_velocidad;
		$this->motor=$_motor;
		$this->ruedas=$_ruedas;
	}	

	public function Ruedas ($parametros){
		$this->ruedas = $parametros;
		return $this->ruedas;
	}	

	public function todo(){
		echo "Este es el nuevo color: ".$this->color." <br>Esta es la nueva velocidad ".$this->velocidad." <br>Este es el nuevo motor ".$this->motor." <br>Esta es al nueva cantidad de ruedas ".$this->ruedas;
	}

	public function color(){
		return $this->color;
	}

}


echo "<h3>Herencia</h3>";

$moto1 = new Moto('rojo','100km/h','5 galones','2 ruedas'); //No se pone __contruct() se accede directamente desde la instancia cuando se usa construct;

echo "Se esta sobreescribiendo las ruedas: ",$moto1->Ruedas(4),"<br>"; //Esta sobreescribiendo ruedas
$moto1->todo();
echo "<br><b>Funcion que te muestra el color: </b>",$moto1->color()."<br>";
$moto1->frenar();
//$moto1->Ruedas(2);
//echo "La moto tiene: ".$moto1->Ruedas(2)." ruedas<br>";
//echo "<br><b>Heredando el metodo Arrancar: </b><br>";
//$moto1->Arrancar("10km/h","5 cilindros");

var_dump($moto1);

