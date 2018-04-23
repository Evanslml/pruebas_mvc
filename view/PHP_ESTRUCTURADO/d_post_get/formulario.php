<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$var = "2";
	echo $var;
	?>
	
	<h3>FORMULARIO METODO GET</h3>
	<form action="GET.php" method="GET">
		<div>
			<label>Nombre</label>
			<input type="text" name="nombre">
		</div>
		<div>
			<label>Password</label>
			<input type="text" name="password">
		</div>
		<div>
			<input type="submit" value="Guardar">
		</div>
	</form>


	<h3>FORMULARIO METODO POST</h3>
	<form action="POST.php" method="POST">
		<div>
			<label>Nombre</label>
			<input type="text" name="nombre">
		</div>
		<div>
			<label>Password</label>
			<input type="text" name="password">
		</div>
		<div>
			<input type="submit" value="Guardar">
		</div>
	</form>

</body>
</html>