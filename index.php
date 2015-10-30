<?php

  include_once 'config/config_app.php';
  include_once 'controller/categorias_controller.php';
  include_once 'controller/productos_controller.php';

  if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
  {
    $indexController = new IndexController();
    $indexController->MostrasIndex();
  }
  else {

    switch ($_REQUEST[ConfigApp::$ACTION])  {
      case ConfigApp::$ACTION_INICIO:
        $indexController = new IndexController();
        echo $indexController->RetornarContenido($_REQUEST[ConfigApp::$ACTION]);
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
      default:
        echo 'Pagina no encontrada';
        break;
    }

  }

?>
