
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<h3>FORMULARIO MVC POO </h3>
	{if isset($error)}
	{$error}
	{/if}

	<form action="index.php?modo=login" method="POST">
		<div>
			<label>Nombre</label>
			<input type="text" name="nombre"><br><br>
			<label>Password</label>
			<input type="text" name="password"><br><br>
			<a href="index.php?modo=registro">Registrarse</a><br><br>
			<a href="index.php?modo=claveperdida">Recuperar Contraseña</a><br><br>
			<input type="hidden" name="login" value="1">
			<input type="submit" value="Guardar">
		</div>
	</form>

</body>
</html>