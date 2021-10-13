<?php
  $mysqli = new mysqli('tcccartola', 'nomeBanco', 'senhaBanco', 'banco');

  $user = filter_input(INPUT_GET, 'nomeUsuario');
  $sql = "SELECT * FROM `usuarios` WHERE `nomeUsuario` = '{$user}'";

  $query = $mysqli->query( $sql ); //executo a query

  if($query->num_rows > 0 ) {//se retornar algum resultado
    echo 'Usuário em uso!';
  }else{
    echo 'Usuário disponível!';
  }
?>
