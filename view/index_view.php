<?php
  include_once 'view/view.php';

  class IndexView extends View
  {

<<<<<<< HEAD
      function mostrarIndex(){
=======
      function mostrarIndex()
      {
>>>>>>> 4d2356910f1673cc06f35dfda65731418e0f5536
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->display('index.tpl');
      }

      public function mostrarTPL($contenido)
      {
        $this->smarty->assign('errores', $this->errores);
        return $this->smarty->fetch($contenido);
      }

  }

?>
