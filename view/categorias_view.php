<?php
  include_once 'view/view.php';

  class categoriasView extends view
  {

      function mostrarIndex(){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->display('index.tpl');
      }

      public function mostrarTPL($contenido,$categoria)
      {
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('categorias', $categoria);
        return $this->smarty->fetch($contenido);
      }

  }

?>
