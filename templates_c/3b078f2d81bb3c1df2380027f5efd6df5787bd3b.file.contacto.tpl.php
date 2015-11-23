<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 23:15:34
         compiled from "templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21656539006d6af48-26230929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b078f2d81bb3c1df2380027f5efd6df5787bd3b' => 
    array (
      0 => 'templates\\contacto.tpl',
      1 => 1446218639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21656539006d6af48-26230929',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56539006e27e94_42626284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56539006e27e94_42626284')) {function content_56539006e27e94_42626284($_smarty_tpl) {?><section>
  <div class="container">
    <div class="fluid_container">
      <div class="row">
        <div class="row">
          <div class="col-xs-12">
           <h2>Contacto</h2>
           <h4>Si desea contactase con nosotros, puede encontrarnos de Lunes a Sábado en el horario de 08:30hs a 13:15hs,
              de 18:00hs a 21:15hs y los Domingos de 08:30hs a 13:30hs en nuestro local situado en Gaboto 5556,
              también puede llamarnos al: (0223) 156-193507, o bien completando el siguiente formulario.</h4>
            <form>
              <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Juan">
              </div>
              <div class="form-group">
                <label>Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="Pérez">
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
              <label>Consulta</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
        </div>
       </div>
     </div>
   </div>
 </div>
</section>
<?php }} ?>