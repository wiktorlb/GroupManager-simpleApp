<?php
/* Smarty version 3.1.30, created on 2024-05-27 17:00:48
  from "E:\xampp\htdocs\project\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6654a020500d56_13029783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99dc888d57a7bc4d1a351d5692a21b8c458aec7e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\project\\app\\views\\templates\\main.tpl',
      1 => 1716822044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6654a020500d56_13029783 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styleNavbar.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styleRequest.css">
</head>

<?php if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?>
<header>
	<div id="navbar" class="sidenav">
		<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/myLogo.png" alt="alternatetext" class="logo_pic">
	<div class="sidenav_profile">
		<a href="#" class="profile_welcome">
			Welcome
			$userName
		</a>
	</div>
	<div class="sidenav_actions">
		<a href="#">Classes</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
RequestView">Requests</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Log Out</a>
	</div>
  </div>
</header>
<?php } else { ?>
<header>
	<div class="sidenav" style="display: flex; justify-content: center; background-color: transparent;">
		<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/myLogo.png" alt="alternatetext" class="logo_pic">
	</div>
</header>
<?php }?>
<body>
	<div class="request_wrapper">
        <div class="request_title-wrapper">
			<div class="request_title">
				$requestTitle
			</div>
		</div>
		<div class="request_main">
        	<div class="requester_name">
				$requesterName
			</div>
			<div class="request_text">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.
				Soluta, voluptas? Temporibus vitae culpa voluptates dolorem quod eveniet autem odio distinctio,
				eum aut laborum aliquid ipsa placeat dolore nesciunt error repellat.
			</div>
		</div>
		<div class="request_buttons">
			<input type="submit" value="accept" class="pure-button pure-button-primary"/>
			<input type="submit" value="decline" class="pure-button pure-button-primary"/>
		</div>
    </div>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17358356486654a0204fae25_80450654', 'loginForm');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20864873436654a0204fc548_91081997', 'footerA');
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
/* {block 'loginForm'} */
class Block_17358356486654a0204fae25_80450654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'loginForm'} */
/* {block 'footerA'} */
class Block_20864873436654a0204fc548_91081997 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerA'} */
}
