<<<<<<< HEAD:templates_c/8bb487c05d78cb389984a6e7057472f659624a12.file.loging.tpl.php
<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 21:02:32
         compiled from ".\templates\loging.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14237565370d8c5b5a6-01689639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 21:57:10
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1784356537da64b7280-53360812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 0c98009b2334282ea366e453c51dfd805702cb98:templates_c/0390f83576cc40b989c12a7362afcba143967e43.file.login.tpl.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
<<<<<<< HEAD:templates_c/8bb487c05d78cb389984a6e7057472f659624a12.file.loging.tpl.php
      0 => '.\\templates\\loging.tpl',
      1 => 1448303914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14237565370d8c5b5a6-01689639',
=======
      0 => '.\\templates\\login.tpl',
      1 => 1448307782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1784356537da64b7280-53360812',
>>>>>>> 0c98009b2334282ea366e453c51dfd805702cb98:templates_c/0390f83576cc40b989c12a7362afcba143967e43.file.login.tpl.php
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
<<<<<<< HEAD:templates_c/8bb487c05d78cb389984a6e7057472f659624a12.file.loging.tpl.php
  'unifunc' => 'content_565370d8c78388_90904268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565370d8c78388_90904268')) {function content_565370d8c78388_90904268($_smarty_tpl) {?>    <div class="container">
=======
  'unifunc' => 'content_56537da64dff04_86121800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56537da64dff04_86121800')) {function content_56537da64dff04_86121800($_smarty_tpl) {?>    <div class="container">
>>>>>>> 0c98009b2334282ea366e453c51dfd805702cb98:templates_c/0390f83576cc40b989c12a7362afcba143967e43.file.login.tpl.php

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
        <button  type="button" class="btn btn-lg btn-warning btn-block" type="submit">Acceder</button>
      </form>

    </div> <!-- /container -->
      </form>
<?php }} ?>