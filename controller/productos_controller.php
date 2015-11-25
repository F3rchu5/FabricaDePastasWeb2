<?php

  include_once 'model/productos_model.php';
  include_once 'controller/controller.php';

  class productoController extends Controller
  {

    function __construct()
    {
      $this->view = new productosView();
      $this->model = new productoModel();
    }

    function RetornarContenido($contenido)
    {
      $ruta = "templates/" . $contenido . ".tpl";
      return $this->view->mostrarTPL($ruta,$this->model->getProductos());
    }

    function agregarProducto()
    {
      if(isset($_REQUEST['product'])&&($_REQUEST['product'] != '')&&isset($_REQUEST['price'])&&($_REQUEST['price'] != '')&&isset($_REQUEST['category'])&&isset($_FILES['imagesToUpload'])){
        $this->model->agregarProducto($_REQUEST['product'], $_REQUEST['price'],$_REQUEST['category'],$_FILES['imagesToUpload']);
      }
      else{
        $this->view->mostrarError('El producto que intenta agregar esta vacio');
      }
      $this->MostrasIndex();
    }

    function borrarProducto(){
      if(isset($_REQUEST['id_producto'])){
        $this->model->borrarProducto($_REQUEST['id_producto']);
      }
      else{
        $this->view->mostrarError('El producto que intenta borrar no existe');
      }
      $this->MostrasIndex();
    }

  }

?>
