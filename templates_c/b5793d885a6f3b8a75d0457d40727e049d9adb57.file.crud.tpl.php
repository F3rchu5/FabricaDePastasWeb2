<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 21:21:21
         compiled from "templates\crud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1532565370dbba0a21-60477915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5793d885a6f3b8a75d0457d40727e049d9adb57' => 
    array (
      0 => 'templates\\crud.tpl',
      1 => 1448310075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1532565370dbba0a21-60477915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_565370dbc29dc7_76746502',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'errores' => 0,
    'error' => 0,
    'productos' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565370dbc29dc7_76746502')) {function content_565370dbc29dc7_76746502($_smarty_tpl) {?><div class="container">

  <div class="page-header">
    <h1>Administrador</h1>
  </div>

  <!--      Categorías     -->
  <div class="row">
    <div class="col-xs-6">
      <label class="control-label" for="nombre">Categoría</label>
      <div>
        <ul id="aMostrar"class="list-group">
          <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
            <li class="list-group-item">
              <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>

                <a class="glyphicon glyphicon-trash" href="index.php?action=crud_borrar_categoria&id_categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"></a>
                <img src="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['img'];?>
" alt="imagen-categoria-<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" class="img-responsive"  />
          <?php } ?>
        </ul>
      </div>
      <button id="mostrar" class="btn btn-default">Mostrar/Ocultar Categorías</button>

      <?php if (count($_smarty_tpl->tpl_vars['errores']->value)>0){?>
        <div class="panel panel-danger">
          <div class="panel-heading">
              <h3 class="panel-title">Errores</h3>
          </div>
          <ul>
            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
            <?php } ?>
          </ul>
        </div>
      <?php }?>

      <form action="index.php?action=crud_agregar_categoria" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="category">Categoría</label>
          <input type="text" class="form-control" id="category" name="category" placeholder="Categoría">
        </div>
        <div class="form-group">
          <label for="imagesToUpload">Imagenes</label>
          <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
        </div>
        <button type="submit" class="btn btn-default">Agregar Categoría</button>
      </form>
    </div>

    <!--      Productos     -->
    <div class="col-xs-6">
      <label class="control-label" for="nombre">Productos</label>
      <ul class="list-group">
        <?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->key => $_smarty_tpl->tpl_vars['producto']->value){
$_smarty_tpl->tpl_vars['producto']->_loop = true;
?>
          <li class="list-group-item">
            <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>

            <a class="glyphicon glyphicon-trash" href="index.php?action=crud_borrar_producto&id_producto=<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"></a>
        <?php } ?>
      </ul>

      <?php if (count($_smarty_tpl->tpl_vars['errores']->value)>0){?>
        <div class="panel panel-danger">
          <div class="panel-heading">
              <h3 class="panel-title">Errores</h3>
          </div>
          <ul>
            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
            <?php } ?>
          </ul>
        </div>
      <?php }?>

      <form action="index.php?action=crud_agregar_producto" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="product">Producto</label>
          <input type="text" class="form-control" id="product" name="product" placeholder="Producto">
        </div>
        <div class="form-group">
          <label for="price">Precio</label>
          <input type="text" class="form-control" id="price" placeholder="Precio">
        </div>
        <div class="form-group">
          <div>
            <label for="category">Categoria</label>
          </div>
          <select class="form-control" id="category">
            <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
              <option><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="imagesToUpload">Imagenes</label>
          <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
        </div>
        <button type="submit" class="btn btn-default" id="agregarProducto">Agregar Producto</button>
      </form>
    </div>

  </div>

</div>
<?php }} ?>