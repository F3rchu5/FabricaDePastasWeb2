<?php /* Smarty version Smarty-3.1.14, created on 2015-09-29 00:54:45
         compiled from "templates\pedido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23725609c5357f8972-61493978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2654c046aa33910357956930767243a701664b' => 
    array (
      0 => 'templates\\pedido.tpl',
      1 => 1443074885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23725609c5357f8972-61493978',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5609c535906793_56475329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5609c535906793_56475329')) {function content_5609c535906793_56475329($_smarty_tpl) {?>  <section>
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
                    <tr>
                      <td>Capeletis</td>
                      <td>$15 x caja</td>
                    </tr>
                    <tr>
                      <td>Ravioles</td>
                      <td>$25 x caja</td>
                    </tr>
                    <tr>
                      <td>Sorrentinos</td>
                      <td>$90 x Kg</td>
                    </tr>
                    <tr>
                      <td>Tallarines</td>
                      <td>$30 x Kg</td>
                    </tr>
                    <tr>
                      <td>Ñoquis</td>
                      <td>$25 x Kg</td>
                    </tr>
                    <tr>
                      <td>Canelones</td>
                      <td>$12 c/u</td>
                    </tr>
                    <tr>
                      <td>Tarteletis</td>
                      <td>$70 x Kg</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                    <td>
                      <form>
                        <div class="form-group">
                          <label>Producto</label>
                          <input type="text" class="form-control" id="producto">
                        </div>
                      </form>
                    </td>
                    <td>
                      <form>
                        <div class="form-group">
                          <label>Precio Por Unidad</label>
                          <input type="text" class="form-control" id="precio">
                        </div>
                      </form>
                    </td>
                  </tr>
                </tfoot>
              </table>
             </div>
             <button type="submit" class="btn btn-default" id="agregarProducto">Agregar</button>
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