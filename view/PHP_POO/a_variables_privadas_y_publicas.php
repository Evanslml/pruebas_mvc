<?php


/**
* La clase es el objeto que despues se va a crear que tiene 
* dentro atributos (caracteristicas) y metodos (acciones)
*/
class Automovil 
{

	private $color;
	private $velocidad;
	private $motor;
	public $prueba; //puede ser accedida y modificado el valor desde fuera
	public $prueba_2;

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

	public function Frenar(){
		$d= " Ha frenado ";
		echo $d;
	}

	public function MiMetodo($parametro){
		$this->prueba_2=$parametro;
		return $this->prueba_2; //devuelve el valor;
	}

}

echo "<h3>CLASES Y OBJETOS</h3>";


$ferrari= new Automovil();

echo "<b>objeto instanciado:</b> "; 
var_dump($ferrari);

echo "<h4>Carro uno</h4>";
$ferrari->Arrancar('200 km/h','12 cilindros');
$ferrari->DeterminarColor('rojo');
$ferrari->Frenar();

$ferrari->prueba="<br><b>informacion que agregue de forma externa al atributo publico prueba</b><br>"; //puede acceder a prueba por que esta en publico
echo $ferrari->prueba;

$ferrari->MiMetodo("Se realizo un metodo para atributo private prueba 2"); //Se esta usando return en el metodo
echo $ferrari->prueba_2;  //Es necesario un echo para mostrar;


var_dump($ferrari);




echo "<h4>Carro dos</h4>";
$porsche= new Automovil();
$porsche->Arrancar('100 km/h','5 cilindros');
$porsche->DeterminarColor('negro con fibra de carbon');




?>
