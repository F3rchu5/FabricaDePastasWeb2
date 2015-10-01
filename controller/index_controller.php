<?php
  include_once 'view/index_view.php';
  include_once 'model/productos_model.php';
  include_once 'model/categorias_model.php';

  class IndexController
  {

    private $view;
    private $model;
    private $modelp;

    function __construct()
    {
      $this->view = new IndexView();
      $this->model = new categoriaModel();
      $this->modelp = new productoModel();
    }

    public function MostrasIndex()
    {
      $this->view->mostrarIndex();
    }

    function RetornarContenido($contenido)
    {
      $ruta = "templates/" . $contenido . ".tpl";
      return $this->view->mostrarTPL($ruta,$this->model->getCategoria(),$this->modelp->getProductos());
    }

    public function agregarCategoria()
    {
      if(isset($_REQUEST['category']) && ($_REQUEST['category'] != '') && isset($_FILES['imagesToUpload'])){
          $this->model->agregarCategoria($_REQUEST['category'], $_FILES['imagesToUpload']);
        }
      else{
        $this->view->mostrarError('La categoría que intenta crear esta vacia');
      }
      $this->MostrasIndex();
    }

    function borrarCategoria(){
      if(isset($_REQUEST['id_categoria'])){
        $this->model->borrarCategoria($_REQUEST['id_categoria']);
      }
      else{
        $this->view->mostrarError('La tarea que intenta borrar no existe');
      }
      $this->MostrasIndex();
    }

    function agregarProducto()
    {
      if(isset($_REQUEST['product'])&&($_REQUEST['product'] != '')&&isset($_REQUEST['price'])&&($_REQUEST['price'] != '')&&isset($_REQUEST['category'])){
        $this->modelp->agregarProducto($_REQUEST['product'], $_REQUEST['price'],$_REQUEST['category']);
      }
      else{
        $this->view->mostrarError('El producto que intenta agregar esta vacio');
      }
      $this->MostrasIndex();
    }

    function borrarProducto(){
      if(isset($_REQUEST['id_producto'])){
        $this->modelp->borrarProducto($_REQUEST['id_producto']);
      }
      else{
        $this->view->mostrarError('El producto que intenta borrar no existe');
      }
      $this->MostrasIndex();
    }

  }

?>
