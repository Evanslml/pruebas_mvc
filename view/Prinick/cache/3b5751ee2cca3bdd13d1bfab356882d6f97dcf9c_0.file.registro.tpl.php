<?php /* Smarty version 3.1.24, created on 2018-04-22 22:48:16
         compiled from "./estilos/templates/public/registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:63395add11301ab151_26994397%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b5751ee2cca3bdd13d1bfab356882d6f97dcf9c' => 
    array (
      0 => './estilos/templates/public/registro.tpl',
      1 => 1524437289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63395add11301ab151_26994397',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5add1130232596_13250240',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5add1130232596_13250240')) {
function content_5add1130232596_13250240 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '63395add11301ab151_26994397';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h3>Registro</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>

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
</html><?php }
}
?>