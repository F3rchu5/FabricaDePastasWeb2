<?php
  include_once 'libs/Smarty.class.php';

  class IndexView {
      private $smarty;
      private $errores;


      function __construct(){
        $this->smarty = new Smarty();
        $this->errores = array();
      }

      function mostrarIndex(){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->display('index.tpl');
      }

      public function mostrarTPL($contenido)
      {
        $this->smarty->assign('errores', $this->errores);
        return $this->smarty->fetch($contenido);
      }

      function mostrarError($error){
        array_push($this->errores, $error);
      }

      function mostrar($categoria){
        $this->smarty->assign('errores', $this->errores);
        $this->smarty->assign('categorias', $categoria);
        $this->smarty->display('crud.tpl');
      }

  }
?>
