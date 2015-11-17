<?php
  include_once 'view/view.php';

  class categoriasView extends view
  {

      public function mostrarTPL($contenido,$categoria)
      {
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('categorias', $categoria);
        return $this->smarty->fetch($contenido);
      }

  }

?>
