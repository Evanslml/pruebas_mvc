<?php /* Smarty version 3.1.24, created on 2018-04-22 23:24:03
         compiled from "./estilos/templates/public/claveperdida.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:124465add1993c092f3_79077796%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9bf6c0850144a19b0e101d1c2e0a79357c161fb' => 
    array (
      0 => './estilos/templates/public/claveperdida.tpl',
      1 => 1524439442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124465add1993c092f3_79077796',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5add1993c51af8_14185072',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5add1993c51af8_14185072')) {
function content_5add1993c51af8_14185072 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '124465add1993c092f3_79077796';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h3>Recuperar contraseña</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>

	<form action="index.php?modo=claveperdida" method="POST">
		<div>
			<label>Email</label>
			<input type="email" name="email"><br><br>
			<input type="submit" value="Recuperar Contraseña">
		</div>
	</form>

</body>
</html><?php }
}
?>