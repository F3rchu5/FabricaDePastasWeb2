<?php
  include_once 'view/view.php';

  class productosView extends view
  {

      public function mostrarTPL($contenido,$producto)
      {
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('categorias', $categoria);
        return $this->smarty->fetch($contenido);
      }

  }

?>
