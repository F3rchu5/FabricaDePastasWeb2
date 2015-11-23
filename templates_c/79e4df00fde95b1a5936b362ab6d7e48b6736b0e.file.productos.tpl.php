<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 23:15:30
         compiled from "templates\productos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2122565390026e31f4-80882508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 23:17:15
         compiled from "templates\productos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238335653906b9823c5-63261677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> d3574cbe8597aa6f1720f517d5dea11d0ad98efa
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79e4df00fde95b1a5936b362ab6d7e48b6736b0e' => 
    array (
      0 => 'templates\\productos.tpl',
      1 => 1443731819,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '2122565390026e31f4-80882508',
=======
  'nocache_hash' => '238335653906b9823c5-63261677',
>>>>>>> d3574cbe8597aa6f1720f517d5dea11d0ad98efa
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'productos' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
<<<<<<< HEAD
  'unifunc' => 'content_565390027eb202_60045914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565390027eb202_60045914')) {function content_565390027eb202_60045914($_smarty_tpl) {?><section>
=======
  'unifunc' => 'content_5653906bce5c74_19122048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5653906bce5c74_19122048')) {function content_5653906bce5c74_19122048($_smarty_tpl) {?><section>
>>>>>>> d3574cbe8597aa6f1720f517d5dea11d0ad98efa
  <div class="container">
    <div class="fluid_container">
      <div class="row">
        <div class="row">
          <div class="col-xs-12">
           <h2>Nuestros productos</h2>
           <p> Productos elaborados con materias primas de excelente calidad totalmente naturales, sin aditivos ni conservantes.</p>
           <p>Disponemos de una amplia variedad  de pastas y rellenos, como así también contamos con la elaboración de tapas para empanadas, tartas y salsas.</p>
           <p>Para garantizar la frescura de nuestra producción, realizamos elaboración a la vista.</p>
           <p>No deje de solicitar nuestros productos y comprobar la calidad de los mismos.</p>
           <ul>
             <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
               <li><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</li>
                <ul>
                  <?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->key => $_smarty_tpl->tpl_vars['producto']->value){
$_smarty_tpl->tpl_vars['producto']->_loop = true;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</li>
                  <?php } ?>
                </ul>
             <?php } ?>
             <!--<li>Capeletis</li>
               <ul>
                 <li>Jamón y queso</li>
                 <li>Ricota y jamón</li>
                 <li>Verdura y Ricota</li>
               </ul>
             <li>Sorrentinos</li>
               <ul>
                 <li>Jamón y queso</li>
                 <li>Muzzarella y panceta</li>
                 <li>Calabaza y queso</li>
               </ul>
             <li>Ravioles</li>
               <ul>
                 <li>Jamón y queso</li>
                 <li>Ricota y jamón</li>
                 <li>Verdura y Ricota</li>
                 <li>Verdura y pollo</li>
               </ul>
             <li>Canelones</li>
               <ul>
                 <li>Jamón y queso</li>
                 <li>Ricota y jamón</li>
                 <li>Verdura y Ricota</li>
               </ul>
             <li>Ñoquis</li>
               <ul>
                 <li>Papa</li>
                 <li>Espinaca</li>
                 <li>Queso</li>
               </ul>
             <li>Tallarines</li>
               <ul>
                 <li>Al huevo</li>
                 <li>Espinaca</li>
                 <li>Morrón</li>
               </ul>-->
           </ul>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php }} ?>