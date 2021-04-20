<?php
  session_start();

  //Aqui será feita a autenticação do usuário

  $_SESSION[SESSAO] = "1";

  header('Location: home.php');
?>
