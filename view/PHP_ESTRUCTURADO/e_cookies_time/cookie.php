<?php

$color='';

if(!empty($_COOKIE['color'] )){//Si la cookie esta no esta vacia
	$color=$_COOKIE['color'];
}

if(isset($_REQUEST['miradio'])){ //Si la variable esta definida
//$_radio=$_REQUEST['miradio'];

	if($_REQUEST['miradio'] == 1){
		setcookie('color','red',time() + (60*60) ,'/'); //la propiedad red lo guardara por 60*60 segundos y sera accedida desde la carpeta superior
		header('location: cookie.php'); //Redireccionando a la misma pagina para ver el funcionamiento de la pagina
	} else if($_REQUEST['miradio'] == 2){
		setcookie('color','blue',time() + (60*60) ,'/');
		header('location: cookie.php');
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body style="background-color:<?php echo $color?>">
	<?php
	echo "<b>formulario que permite elegir un color y guardarlo en cookie, color escogido : </b>".$color;
	?>
	<form action="cookie.php" method="POST">
		<label><input type="radio" name="miradio" value="1"/>Elegir color rojo</label><br>
		<label><input type="radio" name="miradio" value="2"/>Elegir color azul</label><br>
		<input type="submit" value="Elegir el color de fondo"/>
	</form>	
</body>
</html>
