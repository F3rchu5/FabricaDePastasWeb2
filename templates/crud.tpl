<div class="container">

  <div class="page-header">
    <h1>Administrador</h1>
  </div>

  <!--      Categorías     -->
  <div class="row">
    <div class="col-xs-6">
      <label class="control-label" for="nombre">Categoría</label>
      <div>
        <ul id="aMostrar"class="list-group">
          {foreach $categorias as $categoria}
            <li class="list-group-item">
              {$categoria['nombre']}
                <a class="glyphicon glyphicon-trash" href="index.php?action=crud_borrar_categoria&id_categoria={$categoria['id_categoria']}"></a>
                <img src="{$categoria['img']}" alt="imagen-categoria-{$categoria['id_categoria']}" class="img-responsive"  />
          {/foreach}
        </ul>
      </div>
      <button id="mostrar" class="btn btn-default">Mostrar/Ocultar Categorías</button>

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
      <ul id="listaProductos" class="list-group">
        {foreach $productos as $producto}
          <li class="list-group-item">
            {$producto['nombre']}
            <a class="glyphicon glyphicon-trash" href="index.php?action=crud_borrar_producto&id_producto={$producto['id_producto']}"></a>
        {/foreach}

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
            {foreach $categorias as $categoria}
              <option>{$categoria['nombre']}</option>
            {/foreach}
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
