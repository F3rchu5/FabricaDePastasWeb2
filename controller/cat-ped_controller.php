<?php

  include_once 'model/categorias_model.php';
  include_once 'model/productos_model.php';
  include_once 'controller/controller.php';

  class CatPedController extends Controller
  {

    function __construct()
    {
      $this->view = new CatPedView();
      $this->model = new CategoriasModel();
      $this->modelp = new ProductosModel();
    }

    function RetornarContenido($contenido)
    {
      $ruta = "templates/" . $contenido . ".tpl";
      return $this->view->mostrarTPL($ruta,$this->model->getCategoria(),$this->modelp->getProductos());
    }

  }

?>
