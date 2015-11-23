<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 19:21:16
         compiled from ".\templates\loging.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1848656533e0d386b95-68239240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bb487c05d78cb389984a6e7057472f659624a12' => 
    array (
      0 => '.\\templates\\loging.tpl',
      1 => 1448302808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1848656533e0d386b95-68239240',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56533e0d3ddbc1_42540601',
  'variables' => 
  array (
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56533e0d3ddbc1_42540601')) {function content_56533e0d3ddbc1_42540601($_smarty_tpl) {?>    <div class="container">

      <form class="form-signin" method="POST" action="index.php?action=login">
        <h2 class="form-signin-heading">Acceso</h2>
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