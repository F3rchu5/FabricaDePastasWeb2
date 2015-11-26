<?php
  require_once 'fabrica_api.php';

  $fabricaAPI = new FabricaAPI($_REQUEST['parametros']);
  echo $fabricaAPI->processAPI();
?>
