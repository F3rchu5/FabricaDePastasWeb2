<?php
  include_once 'view/View.php';

  class LoginView extends View
  {

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
