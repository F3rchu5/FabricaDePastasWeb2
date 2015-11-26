<?php
  include_once 'view/view.php';

  class ProductosView extends View
  {

      public function mostrarTPL($contenido,$producto)
      {
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('productos', $producto);
        return $this->smarty->fetch($contenido);
      }

  }

?>
