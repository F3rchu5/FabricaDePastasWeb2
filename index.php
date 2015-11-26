<?php

  include_once 'config/config_app.php';
  include_once 'controller/categorias_controller.php';
  include_once 'controller/productos_controller.php';
  include_once 'controller/controller.php';
  include_once 'controller/index_Controller.php';
  include_once 'controller/login_Controller.php';
  include_once 'controller/cat-ped_Controller.php';

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
        $categoriaController = new CategoriasController();
        echo $categoriaController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_PRODUCTOS:
        $productosController = new CatPedController();
        echo $productosController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_PEDIDO:
        $productoController = new ProductosController();
        echo $productoController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_CONTACTO:
        $indexController = new IndexController();
        echo $indexController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_LOGIN:
        $indexController = new LoginController();
        echo $indexController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_CRUD:
        $controlador = new LoginController();
        $controlador->login();
        break;
      case ConfigApp::$ACTION_CRUD_AGREGAR_CATEGORIA:
        $controlador = new crudController();
        $controlador->agregarCategoria();
        echo $controlador->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_CRUD_BORRAR_CATEGORIA:
        $controlador = new crudController();
        echo $controlador->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_CRUD_AGREGAR_PRODUCTO:
        $controlador = new crudController();
        echo $controlador->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
        break;
      case ConfigApp::$ACTION_CRUD_BORRAR_PRODUCTO:
        $controlador = new crudController();
        echo $controlador->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
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
