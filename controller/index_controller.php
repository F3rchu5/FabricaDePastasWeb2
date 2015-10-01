<?php
  include_once 'view/index_view.php';
  include_once 'model/productos_model.php';

  class IndexController
  {

    private $view;
    private $model;

    function __construct()
    {
      $this->view = new IndexView();
      $this->model = new categoriaModel();
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

    public function mostrarCrud()
    {
      $this->view->mostrar($this->model->getCategoria());
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

  }

?>
