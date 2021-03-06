<?php
  include_once 'controller/controller.php';
  include_once 'model/usuarios_model.php';

  class LoginController extends Controller
  {

    function __construct()
    {
      $this->model = new UsuariosModel();
      $this->view = new LoginView();
      //$this->checkSesion();
    }

    function logout()
    {
      session_start();
      session_destroy();
      header("Location: index.php");
      die();
    }


    function login()
    {
      if(isset($_REQUEST["txtEmail"]) && isset($_REQUEST["txtPassword"]))
      {
        $email = $_REQUEST["txtEmail"];
        $pass = $_REQUEST["txtPassword"];

        $usuario = $this->model->getUsuario($email);
        print_r($usuario);
        if(password_verify($pass, $usuario["password"]))
        {
          session_start();
          $_SESSION["email"] = $email;
          header("Location: index.php");
          die();
        }
        else {
          $this->view->mostrarError("Usuario y password invalidos");
        }
      }
      else {
        $this->view->mostrarError("Debe ingresar Usuario y Password validos");
      }
      $this->MostrasIndex();
    }

    public function MostrasIndex()
    {
      $this->view->mostrarIndex();
    }

    function RetornarContenido($contenido)
    {
      $ruta = "templates/" . $contenido . ".tpl";
      return $this->view->mostrarTPL($ruta);
    }

  }

?>
