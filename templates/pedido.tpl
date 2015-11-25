  <section>
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
                    {foreach $productos as $producto}
                      <tr>
                        <td>{$producto['nombre']}</td>
                        <td>{$producto['precio']}</td>
                      </tr>
                    {/foreach}
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
