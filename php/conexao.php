<?php
  $host = "db4free.net:3306";
  $bd = "bdcartola";
  $usuario = "tcccartola";
  $senha = "arymeuanr";

  $conexao = mysqli_connect($host,$usuario,$senha,$bd);

  if(!$conexao) {
    echo mysqli_connect_errno();
    exit();
  }

  mysqli_set_charset($conexao, "utf8");
?>
