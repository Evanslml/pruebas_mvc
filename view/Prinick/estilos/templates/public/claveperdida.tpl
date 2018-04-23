
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h3>Recuperar contraseña</h3>
	{if isset($error)}
	{$error}
	{/if}

	<form action="index.php?modo=claveperdida" method="POST">
		<div>
			<label>Email</label>
			<input type="email" name="email"><br><br>
			<input type="submit" value="Recuperar Contraseña">
		</div>
	</form>

</body>
</html>