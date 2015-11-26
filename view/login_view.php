<?php
  include_once 'view/View.php';

  class LoginView extends View
  {

<<<<<<< HEAD
  function mostrarIndex(){
    $this->smarty->assign('email', $_SESSION["email"]);
    $this->smarty->assign('errores', $this->errores);
    $this->smarty->display('login.tpl');
  }
=======
    function mostrarIndex()
    {
      $this->smarty->assign('email', $_SESSION["email"]);
      $this->smarty->assign('errores', $this->errores);
      $this->smarty->display('crud.tpl');
    }
>>>>>>> 4d2356910f1673cc06f35dfda65731418e0f5536

    public function mostrarTPL($contenido)
    {
      $this->smarty->assign('errores', $this->errores);
      return $this->smarty->fetch($contenido);
    }

  }


?>
