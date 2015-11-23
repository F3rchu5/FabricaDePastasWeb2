<?php
require_once 'api_base.php';
require_once 'model/categorias_model.php';
require_once 'model/productos_model.php';
require_once 'model/usuarios_model.php';
require_once 'model/model.php';

class FabricaApi extends ApiBase {
  private $modelUsuarios;

  function __construct($request){
    parent::__construct($request);
    $this->modelUsuarios = new UsuariosModel();

  }

  function fabrica(){
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
