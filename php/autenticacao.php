<?php
  if($_POST){
    $tipoForm = $_POST["tipoForm"];

    if($tipoForm == 0){
      
      session_start();

      //Aqui será feita a autenticação do usuário

      $_SESSION[SESSAO] = "1";

      header('Location: home.php');
    }else{
      $email = $_POST["email"];
      $nomeUsuario = $_POST["nomeUsuario"];
      $senha = $_POST["senha"];
  
      $select = "SELECT * FROM usuarios WHERE email like '%$email%'";
  
      $resultado = mysqli_query($conexao, $select);
  
      if(mysqli_num_rows($resultado) == 1){
          // Inserir erro se e-mail já existir
      }else{
          $query = "INSERT INTO usuarios(email,nomeUsuario,senha ) VALUES ('$email', '$nomeUsuario', '$senha')";
          
          mysqli_query($conexao,$query);
          header("location:index.php");
      }
    }
  }
?>
