<?php /* Smarty version Smarty-3.1.14, created on 2015-10-01 02:34:41
         compiled from ".\templates\crud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24318560c5c596b0777-06936431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94b43958ccb331b4a81963f1de5505c69e711c8d' => 
    array (
      0 => '.\\templates\\crud.tpl',
      1 => 1443659523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24318560c5c596b0777-06936431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560c5c5971cd45_66357726',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'errores' => 0,
    'error' => 0,
    'tarea' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560c5c5971cd45_66357726')) {function content_560c5c5971cd45_66357726($_smarty_tpl) {?><div class="container">

  <div class="page-header">
    <h1>Administrador</h1>
  </div>

  <div class="row">
    <div class="col-xs-6">
      <label class="control-label" for="nombre">Categoría</label>
      <div >
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
      <button id="mostrar" class="btn btn-default">Mostrar Categorías</button>

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
        <button type="submit" class="btn btn-default">Agregar</button>
      </form>
    </div>


    <div class="col-xs-6">
      <label class="control-label" for="nombre">Productos</label>
      <ul class="list-group">
        <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
          <li class="list-group-item">
            <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>

            <!--<a class="glyphicon glyphicon-trash" href="index.php?action=borrar_tarea&id_task=<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
"></a>
      -->  <?php } ?>
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

      <form action="index.php?action=agregar_producto" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="product">Producto</label>
          <input type="text" class="form-control" id="product" name="product" placeholder="Producto">
        </div>
        <button type="submit" class="btn btn-default">Agregar</button>
      </form>
    </div>
  </div>

</div>
<?php }} ?>