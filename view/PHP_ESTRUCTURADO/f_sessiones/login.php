<?php

if(isset($_GET['error'])){
	
	$error=$_GET['error'];

	switch ($error) {
		case '1':
			echo "ERROR: Debes llenar todos los campos";
			break;
		case '2':
			echo "ERROR: Los datos ingresados no son los correctos";
			break;
		case '3':
			echo "ERROR: No debes saltarte el formulario";
			break;
		case '4':
			echo "ERROR: No ha iniciado sesion";
			break;
	}

	unset($_GET['error']); //Destruye la variable 

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<h3>FORMULARIO METODO POST</h3>
	<form action="post.php" method="POST">
		<div>
			<label>Nombre</label>
			<input type="text" name="nombre">
		</div>
		<div>
			<label>Password</label>
			<input type="text" name="password">
		</div>
		<div>
			<input type="checkbox" value="1" name="sesion">
			<label>Deseo recordar mis datoa</label>
		</div>
		<div>
			<input type="submit" value="Guardar">
		</div>
	</form>

</body>
</html>