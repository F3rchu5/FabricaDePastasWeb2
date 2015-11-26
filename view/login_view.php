<?php
  include_once 'view/View.php';

  class LoginView extends View
  {

<<<<<<< HEAD

=======
>>>>>>> 3f754c98a4e9a060aa87109bce93ed3cb5637b34
    function mostrarIndex()
    {
      $this->smarty->assign('email', $_SESSION["email"]);
      $this->smarty->assign('errores', $this->errores);
      $this->smarty->display('crud.tpl');
    }

    public function mostrarTPL($contenido)
    {
      $this->smarty->assign('errores', $this->errores);
      return $this->smarty->fetch($contenido);
    }

  }


?>
