<?php

  include_once 'config/config_app.php';
  include_once 'controller/categorias_controller.php';
  include_once 'controller/productos_controller.php';
  include_once 'controller/controller.php';
  include_once 'controller/indexController.php';
  include_once 'controller/login_Controller.php';

  if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
  {
    $controlador = new IndexController();
    $controlador->MostrasIndex();
  }
  else {

    switch ($_REQUEST[ConfigApp::$ACTION])  {
      case ConfigApp::$ACTION_INICIO:
        $controlador = new IndexController();
        echo $controlador->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_QUE_OFRECEMOS:
        $indexController = new IndexController();
        echo $indexController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_PRODUCTOS:
        $indexController = new IndexController();
        echo $indexController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_PEDIDO:
        $indexController = new IndexController();
        echo $indexController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_CONTACTO:
        $indexController = new IndexController();
        echo $indexController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_CRUD:
        $indexController = new IndexController();
        echo $indexController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_CRUD_AGREGAR_CATEGORIA:
        $indexController = new IndexController();
        $indexController->agregarCategoria();
        break;
      case ConfigApp::$ACTION_CRUD_BORRAR_CATEGORIA:
        $indexController = new IndexController();
        $indexController->borrarCategoria();
        break;
      case ConfigApp::$ACTION_CRUD_AGREGAR_PRODUCTO:
        $indexController = new IndexController();
        $indexController->agregarProducto();
        break;
      case ConfigApp::$ACTION_CRUD_BORRAR_PRODUCTO:
        $indexController = new IndexController();
        $indexController->borrarProducto();
        break;
      case ConfigApp::$ACTION_LOGIN:
        $indexController = new LoginController();
        $indexController->login();
        break;
      case ConfigApp::$ACTION_LOGOUT:
        $indexController = new LoginController();
        $indexController->logout();
        break;
      default:
        echo 'Pagina no encontrada';
        break;
    }

  }

?>
