<?php

  include_once 'model/categorias_model.php';
  include_once 'model/productos_model.php';
  include_once 'controller/controller.php';

  class crudController extends Controller
  {

    function __construct()
    {
      $this->view = new crudView();
      $this->model = new categoriaModel();
      $this->modelp = new ProductoModel();
    }

    function RetornarContenido($contenido)
    {
      $ruta = "templates/" . $contenido . ".tpl";
      return $this->view->mostrarTPL($ruta,$this->model->getCategoria(),$this->modelp->getProductos());
    }

  }

?>
