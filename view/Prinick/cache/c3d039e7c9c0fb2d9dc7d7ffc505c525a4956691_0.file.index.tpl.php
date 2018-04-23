<?php /* Smarty version 3.1.24, created on 2018-04-22 23:22:57
         compiled from "./estilos/templates/public/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:250205add19510105f1_24487785%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3d039e7c9c0fb2d9dc7d7ffc505c525a4956691' => 
    array (
      0 => './estilos/templates/public/index.tpl',
      1 => 1524439371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250205add19510105f1_24487785',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5add195107a5d5_86310218',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5add195107a5d5_86310218')) {
function content_5add195107a5d5_86310218 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '250205add19510105f1_24487785';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<h3>FORMULARIO MVC POO </h3>
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>

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
</html><?php }
}
?>