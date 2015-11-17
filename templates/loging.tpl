    <div class="container">

      <form class="form-signin">
        <h3 class="form-signin-heading">Acceder para continuar</h3>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required>
        {if count($errores) gt 0}
          <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            {foreach $errores as $error}
              {$error}
            {/foreach}
          </div>
        {/if}
        <button  type="button" class="btn btn-warning" type="submit">Acceder</button>
      </form>

    </div> <!-- /container -->
