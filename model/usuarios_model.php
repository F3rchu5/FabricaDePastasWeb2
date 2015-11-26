<?php

  include_once "model/model.php";

  class UsuariosModel extends Model {

    function getUsuario($email)
    {
      $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
      $consulta->execute(array($email));
      return $consulta->fetchAll();
    }

  }

?>
