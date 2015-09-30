<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 02:05:51
         compiled from ".\templates\crud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18985560b1a6fece045-18003351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94b43958ccb331b4a81963f1de5505c69e711c8d' => 
    array (
      0 => '.\\templates\\crud.tpl',
      1 => 1443571534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18985560b1a6fece045-18003351',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560b1a703f3cf9_74642075',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'tarea' => 0,
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560b1a703f3cf9_74642075')) {function content_560b1a703f3cf9_74642075($_smarty_tpl) {?><div class="container">

  <div class="page-header">
    <h1>Administrador</h1>
  </div>

  <div class="row">
    <div class="col-xs-6">
      <label class="control-label" for="nombre">Categoría</label>
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

      <form action="index.php?action=crud_agregar_categoria" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="category">Categoría</label>
          <input type="text" class="form-control" id="category" name="category" placeholder="Categoría">
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