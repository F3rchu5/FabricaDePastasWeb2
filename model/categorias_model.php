<?php

  include_once "model/model.php";

  class CategoriaModel extends Model
  {

    private $categoria;

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

    private function subirArchivos($archivos){
      $destino = 'images/uploaded/' . uniqid() . $archivos['name'][0];
      move_uploaded_file($archivos['tmp_name'][0], $destino);
      return $destino;
    }

    public function agregarCategoria($categoria, $files){
      $ruta = $this->subirArchivos($files);
      $consulta = $this->db->prepare('INSERT INTO categoria(nombre,img) VALUES(?,?)');
      $consulta->execute(array($categoria,$ruta));
    }

    public function borrarCategoria($id_categoria){
      $consulta = $this->db->prepare('DELETE FROM categoria WHERE id_categoria=?');
      $consulta->execute(array($id_categoria));
    }

  }

?>
