<?php
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
