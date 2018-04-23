<?php /* Smarty version 3.1.24, created on 2018-04-22 20:16:32
         compiled from "./estilos/templates/public/demo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:247515adceda02431c7_77317724%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '701e89940b802c514785500fab6a7e688692e7e0' => 
    array (
      0 => './estilos/templates/public/demo.tpl',
      1 => 1524428125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247515adceda02431c7_77317724',
  'variables' => 
  array (
    'variable1' => 0,
    'variable2' => 0,
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5adceda03533f0_26806902',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5adceda03533f0_26806902')) {
function content_5adceda03533f0_26806902 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '247515adceda02431c7_77317724';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DIRIS LN</title>
</head>
<body>
	<h1>Esto es index.html</h1>
	<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
	<?php echo $_smarty_tpl->tpl_vars['variable1']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['variable2']->value;?>
 <br/>
	<?php }} ?>

	<ul>
	<?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 6+1 - (3) : 3-(6)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 3, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
	    <li><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</li>
	<?php }} ?>
	</ul>

	
</body>
</html><?php }
}
?>