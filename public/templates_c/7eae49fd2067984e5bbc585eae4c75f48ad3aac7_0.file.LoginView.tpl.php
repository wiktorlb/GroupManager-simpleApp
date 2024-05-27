<?php
/* Smarty version 3.1.30, created on 2024-05-27 00:18:15
  from "E:\xampp\htdocs\project\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6653b527b47ac4_68316101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eae49fd2067984e5bbc585eae4c75f48ad3aac7' => 
    array (
      0 => 'E:\\xampp\\htdocs\\project\\app\\views\\LoginView.tpl',
      1 => 1716761893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6653b527b47ac4_68316101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13697598416653b527b47028_82964891', 'loginForm');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'loginForm'} */
class Block_13697598416653b527b47028_82964891 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin loginForm">
	<fieldset>
        <div class="pure-control-group">
			<label for="id_user">login: </label>
			<input id="id_user" type="text" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">password: </label>
			<input id="id_pass" type="password" name="password" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>
<?php
}
}
/* {/block 'loginForm'} */
}
