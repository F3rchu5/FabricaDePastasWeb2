<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 23:59:16
         compiled from "templates\pedido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2661156539a44c1e071-08653276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2654c046aa33910357956930767243a701664b' => 
    array (
      0 => 'templates\\pedido.tpl',
      1 => 1446218639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2661156539a44c1e071-08653276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56539a44c96b10_13946241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56539a44c96b10_13946241')) {function content_56539a44c96b10_13946241($_smarty_tpl) {?>  <section>
    <div class="container">
      <div class="fluid_container">
        <div class="row">
            <div class="col-xs-6" >
              <h2>Pedidos</h2>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>PRODUCTO</th>
                      <th>PRECIO POR UNIDAD</th>
                    </tr>
                  </thead>
                  <tbody id="contenidoTabla"><!--Contenido de la tabla-->
                    <?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->key => $_smarty_tpl->tpl_vars['producto']->value){
$_smarty_tpl->tpl_vars['producto']->_loop = true;
?>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
             </div>
           </div>
            <div class="col-xs-6 ">
              <form>
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Ej: Juan">
                </div>
                <div class="form-group">
                  <label>Apellido</label>
                  <input type="text" class="form-control" id="apellido" placeholder="Ej: Pérez">
                </div>
                <div class="form-group">
                  <label>Teléfono</label>
                  <input type="password" class="form-control" id="telefono" placeholder="Ej: (0123) 1234-5678">
                </div>
                <div class="form-group">
                  <label>Localidad</label>
                  <input type="text" class="form-control" id="localidad" placeholder="Ej: Cuidad">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" id="email" placeholder="ejemplo@correo.com">
                </div>
                <div class="form-group">
                  <label>Direccion</label>
                  <input type="password" class="form-control" id="direccion" placeholder="Ej: Calle 1234">
                </div>
                <div class="form-group">
                  <label>Pedido</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>
<script src="js/informacion.js"></script>
<?php }} ?>