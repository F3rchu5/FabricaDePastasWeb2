<?php

  include_once 'model/categorias_model.php';
  include_once 'controller/controller.php';

  class CategoriaController extends Controller
  {

    function __construct()
    {
      $this->view = new categoriasView();
      $this->model = new categoriaModel();
    }

    function RetornarContenido($contenido)
    {
      $ruta = "templates/" . $contenido . ".tpl";
      return $this->view->mostrarTPL($ruta,$this->model->getCategoria());
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
