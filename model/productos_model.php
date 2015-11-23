<?php

  include_once "model/model.php";

  class ProductoModel
  {

    private $producto;

    public function getProductos(){
      $productos = array();
      $consulta = $this->db->prepare("SELECT * FROM producto");
      $consulta->execute();
      $id=0;
      while ($producto = $consulta->fetch()){
        $productos[$id]['id_producto'] = $producto['id_producto'];
        $productos[$id]['nombre'] = $producto['nombre'];
        $productos[$id]['precio'] = $producto['precio'];
        $productos[$id]['id_categoria'] = $producto['id_categoria'];
        $id++;
      }
      return $productos;
    }

    private function buscarId($nombreCat)
    {
      $consulta = $this->db->prepare("SELECT * FROM categoria");
      $consulta->execute();
      while ($categoria = $consulta->fetch()){
        if ($categoria['nombre'] = $nombreCat) {
          return $categoria['id'];
        }
      }
    }

    private function subirArchivos($archivos){
      $destino = 'images/uploaded/' . uniqid() . $archivos['name'][0];
      move_uploaded_file($archivos['tmp_name'][0], $destino);
      return $destino;
    }

    public function agregarProducto($producto,$precio,$categoria,$img){
      $id_cat = $this->buscarId($categoria);
      $ruta = $this->subirArchivos($img);
      $consulta = $this->db->prepare('INSERT INTO fabrica.producto(nombre, precio, id_categoria) VALUES (?,?,?)');
      $consulta->execute(array($producto,$precio,$id_cat));
    }

    public function borrarProducto($id_producto){
      $consulta = $this->db->prepare('DELETE FROM producto WHERE id_producto=?');
      $consulta->execute(array($id_producto));
    }

  }

?>
