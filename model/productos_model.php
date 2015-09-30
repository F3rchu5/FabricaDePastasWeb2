<?php

  class categoriaModel
  {

    private $categoria;
    private $db;

    public function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;dbname=fabrica;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getCategoria(){
      $consulta = $this->db->prepare("SELECT * FROM categoria");
      $consulta->execute();
      return $consulta->fetchAll();
    }

    function agregarCategoria($categoria){
      $consulta = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
      $consulta->execute(array($categoria));
      if($consulta->rowCount() > 0)
        return 'categoria agregada';
      else
        return 'No se Agrego';
    }

  }

?>
