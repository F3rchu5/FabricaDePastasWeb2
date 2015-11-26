<?php
  include_once 'view/view.php';

  class IndexView extends View
  {

<<<<<<< HEAD

=======
>>>>>>> 3f754c98a4e9a060aa87109bce93ed3cb5637b34
      function mostrarIndex()
      {
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
