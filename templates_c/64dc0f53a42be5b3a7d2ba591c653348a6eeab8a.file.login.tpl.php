<?php /* Smarty version Smarty-3.1.14, created on 2015-11-25 15:56:24
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261795655cc18530064-23914254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0f53a42be5b3a7d2ba591c653348a6eeab8a' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1448322305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261795655cc18530064-23914254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5655cc18586b34_61882018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655cc18586b34_61882018')) {function content_5655cc18586b34_61882018($_smarty_tpl) {?>
  <form class="form-signin" method="POST" action="index.php?action=login">
    <h3 class="form-signin-heading">Acceder para continuar</h3>
    <label for="txtEmail" class="sr-only">Email</label>
    <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" required autofocus>
    <label for="txtPassword" class="sr-only">Password</label>
    <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
    <?php if (count($_smarty_tpl->tpl_vars['errores']->value)>0){?>
      <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        <?php } ?>
      </div>
    <?php }?>
    <button class="btn btn-lg btn-warning btn-block" type="submit">Acceder</button>
  </form>
<?php }} ?>