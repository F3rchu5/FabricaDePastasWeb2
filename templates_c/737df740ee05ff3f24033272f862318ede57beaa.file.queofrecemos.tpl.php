<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 22:03:04
         compiled from "templates\queofrecemos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2407756537f0847ab47-12588805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '737df740ee05ff3f24033272f862318ede57beaa' => 
    array (
      0 => 'templates\\queofrecemos.tpl',
      1 => 1446218639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2407756537f0847ab47-12588805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56537f08578323_82131531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56537f08578323_82131531')) {function content_56537f08578323_82131531($_smarty_tpl) {?><article>
  <div class="container">
    <div class="fluid_container">
      <div class="row">
          <div class="col-xs-12">
            <h2>Qué ofrecemos </h2>
            <p> Nuestro principal objetivo como pequeña fábrica, es mantener los sabores  y recetas tradicionales como se realizaban antes.</p>
            <p>Nos caracterizamos por nuestra agradable atención y asesoramiento.</p>
            <p>Priorizamos el mantener las buenas costumbres y ofrecerle al cliente	todo lo que necesite.</p>

            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-6 contenedor">
                  <p>Dentro de nuestro local, pueden encontrar:</p>
                    <ul class="productos">
                      <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</li>
                      <?php } ?>
                    </ul>
                </div>
                <div class="col-xs-6">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="images/1.jpg" alt="ñoquis">
                        <div class="carousel-caption"></div>
                      </div>
                      <div class="item">
                        <img src="images/2.jpg" alt="Sorrentinos">
                        <div class="carousel-caption"></div>
                      </div>
                      <div class="item">
                        <img src="images/3.jpg" alt="Capeletis">
                        <div class="carousel-caption"></div>
                      </div>
                      <div class="item">
                        <img src="images/4.jpg" alt="Ravioles">
                        <div class="carousel-caption"></div>
                      </div>
                      <div class="item">
                        <img src="images/5.jpg" alt="Canelones">
                        <div class="carousel-caption"></div>
                      </div>
                      <div class="item">
                        <img src="images/6.jpg" alt="Tarteletis">
                        <div class="carousel-caption"></div>
                      </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<?php }} ?>