<?php
require_once 'api_base.php';
require_once 'model/categorias_model.php';
require_once 'model/productos_model.php';
require_once 'model/usuarios_model.php';
require_once 'model/model.php';

class FabricaApi extends ApiBase {
  private $modelUsuarios;
  private $modelProductos;
  private $modelCategorias;

  function __construct($request){
    parent::__construct($request);
    $this->modelUsuarios = new UsuariosModel();
    $this->modelProductos = new ModelProducto();
    $this->modelCategorias = new CategoriaModel();


  }

  function producto(){
    switch ($this->method) {
      case 'GET':
        return $this->modelProducto->getProductos();
        break;
      case 'DELETE':
        if(count($this->args) > 0) return $this->modelProductos->borrarProducto($this->args[0]);
        break;
      case 'POST':
        if(isset($_POST['product'], $_POST['price'],$_POST['category'])) return $this->model->agregarProducto($_REQUEST['product'], $_REQUEST['price'],$_REQUEST['category']);
        break;
      /*case 'PUT':
        if(count($this->args) > 0) return $this->model->realizarTarea($this->args[0]);
        break;*/
      default:
            return 'Verbo no soportado';
        break;
    }

    function categoria(){
      switch ($this->method) {
        case 'GET':
          return $this->modelCategorias->getCategoria();
          break;
        case 'DELETE':
          if(count($this->args) > 0) return $this->modelCategorias->borrarCategoria($this->args[0]);
          break;
        case 'POST':
          if(isset($_POST['category'],$_FILES['imagesToUpload']))) return $this->modelCategorias->agregarCategoria($_REQUEST['category'], $_FILES['imagesToUpload']);
          break;
        /*case 'PUT':
          if(count($this->args) > 0) return $this->model->realizarTarea($this->args[0]);
          break;*/
        default:
              return 'Verbo no soportado';
          break;
      }



  function usuario(){
    switch ($this->method) {
      case 'GET':
        return $this->modelUsuarios->getUsuario($email);
        break;
    /*  case 'DELETE':
        if(count($this->args) > 0) return $this->model->borrarTarea($this->args[0]);
        break;
      case 'POST':
        if(isset($_POST['tarea'])) return $this->model->agregarTarea($_POST['tarea']);
        break;
      case 'PUT':
        if(count($this->args) > 0) return $this->model->realizarTarea($this->args[0]);
        break;*/
      default:
            return 'Verbo no soportado';
        break;
    }


  }
}

?>
