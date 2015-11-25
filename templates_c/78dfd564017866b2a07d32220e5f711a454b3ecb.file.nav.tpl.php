<?php /* Smarty version Smarty-3.1.14, created on 2015-11-25 15:51:09
         compiled from ".\templates\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266345655cadd508b12-11984482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78dfd564017866b2a07d32220e5f711a454b3ecb' => 
    array (
      0 => '.\\templates\\nav.tpl',
      1 => 1448318877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266345655cadd508b12-11984482',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5655cadd53a267_65219039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655cadd53a267_65219039')) {function content_5655cadd53a267_65219039($_smarty_tpl) {?><!-- Nav -->
<nav>
  <div class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only"><!--sr=ScreenReader..como ven los disminuidos visuales-->Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="index.html">
          <img src="images/logo.png" alt="Doña Camila"></a>-->
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav pull-right mainNav">
          <li id="inicio"><a>Inicio</a></li>
          <li id="queofrecemos"><a>Qué Ofrecemos</a></li>
          <li id="productos"><a>Productos</a></li>
          <li id="pedido"><a>Realiza Tu Pedido</a></li>
          <li id="contacto"><a>Contacto</a></li>
          <li id="login"><a>Administrador</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
  <!-- /.navbar -->
</nav>
<!-- /Nav -->
<?php }} ?>