<?php include('class.Conexion.php'); ?>
<?php

if(isset($_POST['buscar'])){
	$db = new Conexion();
	$filtro = $db->real_escape_string($_POST['buscar']);
	$sql = $db->query("SELECT * FROM usuarios where nombre like '%$filtro%';");	

	if($db->rows($sql)>0){
		while ($busqueda=$db->recorrer($sql)) {
			echo $busqueda['id_usuario'],'el nombre es: ',$busqueda['nombre'],'<br>';
		}
	}else{
		echo 'No se han encontrado resultados';
	}

}else{

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/smoothness/jquery-ui.css">
	<script
	  src="http://code.jquery.com/jquery-2.2.4.min.js"
	  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	  crossorigin="anonymous"></script>
	
	<script
  src="http://code.jquery.com/ui/1.9.1/jquery-ui.min.js"
  integrity="sha256-UezNdLBLZaG/YoRcr48I68gr8pb5gyTBM+di5P8p6t8="
  crossorigin="anonymous"></script>



	<script>
		$('document').ready(function(){
			$('#buscar').autocomplete({

				source: 'ajax.php'

			});
		});
	</script>
</head>
<body>

	<form action="index.php" method="POST">
		<label for="">Buscar</label><input type="text" name="buscar" id="buscar"/>
		<input type="submit" value="buscar" />
	</form>
</body>
</html>