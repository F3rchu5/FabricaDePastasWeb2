<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 21:02:32
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5729565370d8ac7924-77515640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 21:57:10
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2024756537da6390b88-64334669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 0c98009b2334282ea366e453c51dfd805702cb98
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
<<<<<<< HEAD
      1 => 1447799548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5729565370d8ac7924-77515640',
=======
      1 => 1448311302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2024756537da6390b88-64334669',
>>>>>>> 0c98009b2334282ea366e453c51dfd805702cb98
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
<<<<<<< HEAD
  'unifunc' => 'content_565370d8b08924_13962437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565370d8b08924_13962437')) {function content_565370d8b08924_13962437($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
=======
  'unifunc' => 'content_56537da641d139_39529369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56537da641d139_39529369')) {function content_56537da641d139_39529369($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
>>>>>>> 0c98009b2334282ea366e453c51dfd805702cb98

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!-- Cuerpo del index -->
    <div class="container">
        <div id="contenido">
          <?php echo $_smarty_tpl->getSubTemplate ('login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </div>
    <!-- Fin del cuerpo del index -->
  <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>