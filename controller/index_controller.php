<?php
  include_once 'view/index_view.php';

  class IndexController
  {

    private $view;

    function __construct()
    {
      $this->view = new IndexView();
    }

    public function MostrasIndex()
    {
      $this->view->mostrarIndex();
    }

    function RetornarContenido($contenido)
    {
      $ruta = "templates/". $contenido.".tpl";
      return $this->view->mostrarTPL($ruta);
    }

  }

?>
