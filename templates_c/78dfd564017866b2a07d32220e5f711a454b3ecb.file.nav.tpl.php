<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 23:48:00
         compiled from ".\templates\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1471856538134a79276-26980099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1471856538134a79276-26980099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56538134aac5f3_22867012',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56538134aac5f3_22867012')) {function content_56538134aac5f3_22867012($_smarty_tpl) {?><!-- Nav -->
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