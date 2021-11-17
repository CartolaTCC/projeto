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

      $sql = "SELECT codigo FROM usuarios WHERE email=? AND senha=?";

      if($stmt = mysqli_prepare($conexao, $sql)) {

        mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($resultado) == 1) {

          $sql = "SELECT codigo, email, nomeUsuario  FROM usuarios WHERE email='$email' AND senha= '$senha'";
          $codigo = mysqli_query($conexao, $sql);
          $linha = mysqli_fetch_assoc($codigo);

          $_SESSION["usuario"] = $linha["nomeUsuario"];
          $_SESSION["email"] = $linha["email"];

          //Se o checkbox estiver preenchido ele grava o cookie do usuário
          if(isset($_POST['lembrar_usuario'])){
            lembrar_usuario($email);
          }else{ // se não ele verifica se há algum cookie e destrói
            apagar_usuario();
          }

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
      $confirmaSenha = md5($_POST["confirmaSenha"]);

      $sql = "SELECT codigo FROM usuarios WHERE email=? AND nomeUsuario=?";

      if($stmt = mysqli_prepare($conexao, $sql)) {

        mysqli_stmt_bind_param($stmt, "ss", $email, $nomeUsuario);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($resultado) == 1) {
          header('Location: index.php?erro=1');
        }else{
          if($senha!=$confirmaSenha){
            header('Location: index.php?erro=2');
          }else{
            $query = "INSERT INTO usuarios(email, nomeUsuario, senha) VALUES('$email', '$nomeUsuario', '$senha')";
            mysqli_query($conexao, $query) or die(mysqli_error($conexao));
            header("location:index.php?erro=3");
          }
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

	function lembrar_usuario($user){
		$validade= strtotime("+1 week");
		setcookie("cookieUser", $user, $validade, "/", "", false, true);
	}

  function apagar_usuario(){
  	$validade= time()-3600;
  	setcookie("cookieUser", '', $validade, "/", "", false, true);
  }
?>
