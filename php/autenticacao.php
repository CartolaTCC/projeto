<?php
  include "funcoesEstruturais.php";
  //Estrutura head
  head();

  if(!empty($_POST)){
    include "conexao.php";

    $tipoForm = $_POST["tipoForm"];
    //Se for 0 é login
    if($tipoForm == 0){

      $email = $_POST["emailLogin"];
      $senha = md5($_POST["senhaLogin"]);

      $sql = "SELECT nomeUsuario FROM usuarios WHERE email=? AND senha=?";

      if($stmt = mysqli_prepare($conexao, $sql)) {

        mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($resultado) == 1) {
          $_SESSION["usuario"] = "1";

          header('Location: home.php');
        }else{
          header("location:index.php?erro=0");
        }
      }

    //Se for 1 é cadastro
    }else{
      $email = $_POST["email"];
      $nomeUsuario = $_POST["nomeUsuario"];
      $senha = md5($_POST["senha"]);

      $sql = "SELECT nomeUsuario FROM usuarios WHERE email=?";

      if($stmt = mysqli_prepare($conexao, $sql)) {

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($resultado) == 1) {
          header('Location: index.php?erro=1');
        }else{
          $query = "INSERT INTO usuarios(email, nomeUsuario, senha) VALUES('$email', '$nomeUsuario', '$senha')";
          mysqli_query($conexao, $query) or die(mysqli_error($conexao));
          header("location:index.php");
        }
      }
    }
      mysqli_close($conexao);
      //fecha a conexão
  }else {
    header("location: index.php");
  }

	//Rodapé da página
  rodape();
?>
