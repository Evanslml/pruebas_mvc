<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<h1>Estamos en el home</h1>
	
	<p>{$formulario}</p>
	<form action="index.php?action=home" method="POST">
		<input type="text" name="ej">
		<input type="submit" value="enviar">
	</form>
</body>
</html>