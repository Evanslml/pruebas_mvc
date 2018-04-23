<?php 

include "class.Primera.php";

$objeto = new Segunda("Esto es lo que sale cuando se hace con el parametro construct","2");
$objeto->imprimir();




echo "<h3>Herencia </h3>";
$calculadora = new Imprimir(2,3);
$calculadora ->Sumar(); //accede al metodo de la calse imprimir
var_dump($calculadora);




echo "<h3>Metodo estatico</h3>";
$objeto1 = new Estatico("Esto es lo del estatico");
echo $objeto1-> Impreso(),"<br>";
echo "<p>Aqui puedo acceder al metodo sin instanciar</p>";
echo Estatico::Impresodos("Esto es lo que paso por el estatic function")









?>