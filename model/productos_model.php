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

    private function subirArchivos($archivos){
        $destino = 'images/'.uniqid().$archivos['name'][0];
        move_uploaded_file($archivos['tmp_name'][0], $destino);

      return $destino;
    }

    function getCategoria(){
      $categorias = array();
      $consulta = $this->db->prepare("SELECT * FROM categoria");
      $consulta->execute();
      $id=0;
      while ($categoria = $consulta->fetch()){
        $categorias[$id]['id_categoria'] = $categoria['id_categoria'];
        $categorias[$id]['nombre'] = $categoria['nombre'];
        $categorias[$id]['img'] = $categoria['img'];

        $id++;
      }
      return $categorias;
    }

    function agregarCategoria($categoria, $files){
      $rutas = $this->subirArchivos($files);
      $consulta = $this->db->prepare('INSERT INTO categoria(nombre,img) VALUES(?,?)');
      $consulta->execute(array($categoria,$rutas));
    }

    function borrarCategoria($id_categoria){
      $consulta = $this->db->prepare('DELETE FROM categoria WHERE id_categoria=?');
      $consulta->execute(array($id_categoria));
    }

  }

?>
