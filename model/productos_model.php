<?php

  class productoModel
  {

    private $producto;
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=fabrica;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

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

    public function agregarProducto($producto,$precio,$categoria){
      $id_cat = $this->buscarId($categoria);
      $consulta = $this->db->prepare('INSERT INTO fabrica.producto(nombre, precio, id_categoria) VALUES (?,?,?)');
      $consulta->execute(array($producto,$precio,$id_cat));
    }

    public function borrarProducto($id_producto){
      $consulta = $this->db->prepare('DELETE FROM producto WHERE id_producto=?');
      $consulta->execute(array($id_producto));
    }

  }

?>
