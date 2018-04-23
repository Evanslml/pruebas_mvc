
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h3>Registro</h3>
	{if isset($error)}
	{$error}
	{/if}

	<form action="index.php?modo=registro" method="POST">
		<div>
			<label>Nombre</label>
			<input type="text" name="nombre"><br><br>
			<label>Email</label>
			<input type="email" name="email" required=""><br><br>
			<label>Password</label>
			<input type="password" name="password"><br><br>
			<input type="hidden" name="registro" value="1">
			<input type="submit" value="Guardar">
		</div>
	</form>

</body>
</html>