<div class="container">

  <div class="page-header">
    <h1>Administrador</h1>
  </div>

  <div class="row">
    <div class="col-xs-6">
      <label class="control-label" for="nombre">Categoría</label>
      <ul class="list-group">
        {foreach $categorias as $categoria}
          <li class="list-group-item">
            {$categoria['nombre']}
            <!--<a class="glyphicon glyphicon-trash" href="index.php?action=borrar_tarea&id_task={$tarea['id']}"></a>
      -->  {/foreach}
      </ul>

      {if count($errores) gt 0}
        <div class="panel panel-danger">
          <div class="panel-heading">
              <h3 class="panel-title">Errores</h3>
          </div>
          <ul>
            {foreach $errores as $error}
              <li>{$error}</li>
            {/foreach}
          </ul>
        </div>
      {/if}

      <form action="index.php?action=agregar_categoria" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="task">Categoría</label>
          <input type="text" class="form-control" id="category" name="category" placeholder="Categoría">
        </div>
        <button type="submit" class="btn btn-default">Agregar</button>
      </form>
    </div>

    <div class="col-xs-6">
      <label class="control-label" for="nombre">Productos</label>
      <ul class="list-group">
        {foreach $categorias as $categoria}
          <li class="list-group-item">
            {$categoria['nombre']}
            <!--<a class="glyphicon glyphicon-trash" href="index.php?action=borrar_tarea&id_task={$tarea['id']}"></a>
      -->  {/foreach}
      </ul>

      {if count($errores) gt 0}
        <div class="panel panel-danger">
          <div class="panel-heading">
              <h3 class="panel-title">Errores</h3>
          </div>
          <ul>
            {foreach $errores as $error}
              <li>{$error}</li>
            {/foreach}
          </ul>
        </div>
      {/if}

      <form action="index.php?action=agregar_categoria" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="task">Producto</label>
          <input type="text" class="form-control" id="category" name="category" placeholder="Producto">
        </div>
        <button type="submit" class="btn btn-default">Agregar</button>
      </form>
    </div>
  </div>

</div>
