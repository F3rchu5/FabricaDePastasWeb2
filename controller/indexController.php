<?php

  class IndexController extends Controller
  {
    function __construct()
    {
      $this->view = new indexView();
    }

    public function MostrasIndex()
    {
      $this->view->mostrarIndex();
    }

  }

?>
