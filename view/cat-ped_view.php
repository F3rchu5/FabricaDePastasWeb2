<?php
  include_once 'view/view.php';

  class CatPedView extends View
  {

      public function mostrarTPL($contenido,$categoria,$producto)
      {
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('categorias', $categoria);
        $this->smarty->assign('productos', $producto);
        return $this->smarty->fetch($contenido);
      }

  }

?>
