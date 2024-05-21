<?php
/* Smarty version 3.1.30, created on 2024-05-21 10:36:26
  from "E:\xampp\htdocs\project\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_664c5d0a5f1478_14566539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99dc888d57a7bc4d1a351d5692a21b8c458aec7e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\project\\app\\views\\templates\\main.tpl',
      1 => 1716280581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664c5d0a5f1478_14566539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Dziennik Elektroniczny</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
</head>



<body>
	<div id="wrapper">
		<nav id="menu">
			<h2>Menu</h2>
			<ul>
				<?php if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Log In</a></li>
				<?php } else { ?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Log Out</a></li>
				<?php }?>
			</ul>
		</nav>
		</div>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_560018404664c5d0a5bf946_93770610', 'top');
?>



					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1715514974664c5d0a5e8209_51664006', 'messages');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1983308121664c5d0a5ea656_05878956', 'footer');
?>





	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block 'top'} */
class Block_560018404664c5d0a5bf946_93770610 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_1715514974664c5d0a5e8209_51664006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


						<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
						<div class="messages bottom-margin">
							<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
							<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</ul>
						</div>
						<?php }?>

						<?php
}
}
/* {/block 'messages'} */
/* {block 'footer'} */
class Block_1983308121664c5d0a5ea656_05878956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'footer'} */
}
