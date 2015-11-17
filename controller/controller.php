<?php
  include_once 'view/index_view.php';
  
  class Controller
  {

    protected $view;
    protected $model;

    public function MostrasIndex()
    {
      $this->view->mostrarIndex();
    }
  }

?>
