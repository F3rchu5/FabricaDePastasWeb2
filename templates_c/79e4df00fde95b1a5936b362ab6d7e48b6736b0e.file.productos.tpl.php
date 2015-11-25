<?php /* Smarty version Smarty-3.1.14, created on 2015-11-26 00:28:05
         compiled from "templates\productos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1251656560bf84cf4e7-75551705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79e4df00fde95b1a5936b362ab6d7e48b6736b0e' => 
    array (
      0 => 'templates\\productos.tpl',
      1 => 1448494078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1251656560bf84cf4e7-75551705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56560bf8513bc7_06406327',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'productos' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56560bf8513bc7_06406327')) {function content_56560bf8513bc7_06406327($_smarty_tpl) {?><section>
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
                    <?php if ($_smarty_tpl->tpl_vars['producto']->value['id_categoria']==$_smarty_tpl->tpl_vars['categoria']->value['id_categoria']){?>
                      <li><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</li>
                    <?php }?>
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