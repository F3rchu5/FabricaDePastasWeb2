
<div class="container">
  <form class="form-signin" enctype="multipart/form-data">
    <h3 class="form-signin-heading">Acceder para continuar</h3>
    <label for="txtEmail" class="sr-only">Email</label>
    <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email">
    <label for="txtPassword" class="sr-only">Password</label>
    <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password">
    {if count($errores) gt 0}
      <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        {foreach $errores as $error}
          {$error}
        {/foreach}
      </div>
    {/if}
<<<<<<< HEAD
    <button class="btn btn-lg btn-block" type="submit">Acceder</button>
=======
    <button  id="btnlogin"class="btn btn-lg btn-block" type="submit">Acceder</button>
>>>>>>> 1a3e694f48819917caa0e121ccc5a43716c47142
  </form>
</div>
