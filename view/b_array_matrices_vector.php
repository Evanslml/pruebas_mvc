<?php


$p= "Esto es un array";
$numeros = array('esto es la posicion 0',5,"Evans",$p);

echo "<h3><b>ARRAYS</b></h3>Los arrays muestran el valor segun la posicion. EJM:<br>";
var_dump($numeros);
echo $numeros[2]."<br>";
echo $numeros[3];


echo "<br><h3><b>ARRAYS ASOCIATIVOS</b></h3>Muestran el valor segun el nombre que se le declara.EJM:";

$arrayName = array('1' =>"numeroo uno" ,'pedro'=>"Pedro tiene hambre");

var_dump($arrayName); 

echo $arrayName['pedro'];
echo '<br>Cantidad de valores en el array: '.count($arrayName).'<br>';

echo "<h3>Mostrando elementos de un array con valor numerico con un FOR</h3>";
for ($i=0; $i <count($numeros); $i++) { 
	echo "<br>";
	echo $numeros[$i];
}


echo "<h3>Mostrando elementos de un array asociativo con FOREACH</h3>";
echo "El foreach toma todas las llaves y los valores del array<br>";
foreach ($arrayName as $key => $value) {
	echo ($key." :) ".$value);
	echo "<br>";
}


$x = array(
	'manuel' => array('sexo' => "masculino",'ojos'=>"<strong style=\"color:red\">cafe</strong>", 'altura'=>"1.80" ), 
	'maria' => array('sexo' => "femenino",'ojos'=>"marrones", 'altura'=>"1.60" ), 
	'julio' => array('sexo' => "masculino",'ojos'=>"azul", 'altura'=>"1.68" )
	);

echo "<h3>Array</h3>";

var_dump($x);
echo "Muestra los valores dentro del array con Foreach<br>";

foreach ($x as $key => $value) {
	echo "<b>Nombre: </b>".$key."es de sexo: ".$value['sexo']." el color de los ojos es:".$value['ojos']." y mide ".$value['altura'];
	echo "<br>";
}



















?>