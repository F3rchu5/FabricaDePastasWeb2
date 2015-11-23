<?php
include_once 'view/index_view.php';
  class Controller
  {

    protected $view;
    protected $model;

    function checkSesion(){
    session_start();
    if(!isset($_SESSION["email"])){
      header("Location: index.php?action=login");
      die();
    }
  }



  }

?>
