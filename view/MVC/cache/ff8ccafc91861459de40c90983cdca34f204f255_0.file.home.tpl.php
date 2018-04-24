<?php /* Smarty version 3.1.24, created on 2018-04-24 00:26:34
         compiled from "./views/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71045ade79bab43579_38496014%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff8ccafc91861459de40c90983cdca34f204f255' => 
    array (
      0 => './views/home.tpl',
      1 => 1524529569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71045ade79bab43579_38496014',
  'variables' => 
  array (
    'formulario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5ade79babac5d8_52468376',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ade79babac5d8_52468376')) {
function content_5ade79babac5d8_52468376 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '71045ade79bab43579_38496014';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<h1>Estamos en el home</h1>
	
	<p><?php echo $_smarty_tpl->tpl_vars['formulario']->value;?>
</p>
	<form action="index.php?action=home" method="POST">
		<input type="text" name="ej">
		<input type="submit" value="enviar">
	</form>
</body>
</html><?php }
}
?>