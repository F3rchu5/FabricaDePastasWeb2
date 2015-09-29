<?php /* Smarty version Smarty-3.1.14, created on 2015-09-29 00:56:04
         compiled from "templates\crud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53105609c584a25a77-22085103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5793d885a6f3b8a75d0457d40727e049d9adb57' => 
    array (
      0 => 'templates\\crud.tpl',
      1 => 1443218182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53105609c584a25a77-22085103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tareas' => 0,
    'tarea' => 0,
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5609c584c399c5_78529185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5609c584c399c5_78529185')) {function content_5609c584c399c5_78529185($_smarty_tpl) {?><div class="container">
  <div class="page-header">
    <h1>Lista de Tareas</h1>
  </div>
  <div class="row">
    <div class="col-md-6">
      <label class="control-label" for="nombre">Tarea</label>
      <ul class="list-group">
        <?php  $_smarty_tpl->tpl_vars['tarea'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tarea']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tareas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->key => $_smarty_tpl->tpl_vars['tarea']->value){
$_smarty_tpl->tpl_vars['tarea']->_loop = true;
?>
        <li class="list-group-item">
              <?php if ($_smarty_tpl->tpl_vars['tarea']->value['realizada']){?>
                <s><?php echo $_smarty_tpl->tpl_vars['tarea']->value['tarea'];?>
</s>
              <?php }else{ ?>
                <?php echo $_smarty_tpl->tpl_vars['tarea']->value['tarea'];?>

              <?php }?>
              <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_tarea&id_task=<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
"></a>
              <a class="glyphicon glyphicon-ok" href="index.php?action=realizar_tarea&id_task=<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
"></a>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
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
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <form action="index.php?action=agregar_tarea" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="task">Tarea</label>
          <input type="text" class="form-control" id="task" name="task" placeholder="Tarea">
        </div>
        <button type="submit" class="btn btn-default">Agregar</button>
      </form>
    </div>
  </div>
</div>
<?php }} ?>