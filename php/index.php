<?php
	include "funcoesEstruturais.php";
	//Estrutura head
	head();

  //Se o usuário estiver logado
  if(isset($_SESSION['login'])){
  	//Cabeçalho da página
  	//header('Location: home.php');
  }
?>

	<script>
		/*
			Funçao para gerar o formulário de forma assincrona
			Parâmetros:
				tipo: tipo de formulário
					'login' - formulário de login
					'cadastro' - formulário de cadastro
		*/
		function geraForm(tipo){
			if(tipo == 'login'){
				var HTML = '<form action="home.php" method="POST" name="form_index">'
						+'<div class="row">'
						+'<div class="col-sm-12">'
							+'<div class="form-group">'
								+'<div class="input-group">'
									+'<div class="input-group-prepend">'
										+'<label for="email"><div class="input-group-text"><i class = "material-icons">email</i></div></label>'
									+'</div>'
									+'<input type="text" class="form-control" id="email" placeholder="E-mail" required>'
								+'</div>'
							+'</div>'
						+'</div>'
					+'</div>'
					+'<div class="row">'
						+'<div class="col-sm-12">'
							+'<div class="form-group">'
								+'<div class="input-group">'
									+'<div class="input-group-prepend">'
										+'<label for="senha"><div class="input-group-text"><i class = "material-icons">lock</i></div></label>'
									+'</div>'
									+'<input type="password" class="form-control" id="senha" placeholder="Senha" required>'
								+'</div>'
							+'</div>'
						+'</div>'
					+'</div>'
					+'<div class="row">'
						+'<div class="col-sm-12">'
							+'<div class="form-check">'
								+'<input class="form-check-input" type="checkbox" id="lembrar_senha">'
								+'<label class="form-check-label" for="lembrar_senha">Lembrar-se</label>'
							+'</div>'
						+'</div>'
					+'</div>'
					+'<br/>'
					+'<button type="submit" class="btn-block btn-dark">Entrar</button>'
				+'</form>';

				document.getElementById('avisoFooter').innerHTML = 'Novo na plataforma? <a href="#" onclick = "geraForm(\'cadastro\')"> Registrar-se </a>';
			}else if(tipo == 'cadastro'){
				var HTML = '<div class="row">'
					+'<div class="col-sm-12">'
						+'<div class="form-group">'
							+'<div class="input-group">'
								+'<div class="input-group-prepend">'
									+'<div class="input-group-text"><i class = "material-icons">email</i></div>'
								+'</div>'
								+'<input type="text" class="form-control" id="email" placeholder="E-mail">'
							+'</div>'
						+'</div>'
					+'</div>'
				+'</div>'
				+'<div class="row">'
					+'<div class="col-sm-12">'
						+'<div class="form-group">'
							+'<div class="input-group">'
								+'<div class="input-group-prepend">'
									+'<div class="input-group-text"><i class = "material-icons">account_circle</i></div>'
								+'</div>'
								+'<input type="text" class="form-control" id="nomeUsuario" placeholder="Nome de usuário">'
							+'</div>'
						+'</div>'
					+'</div>'
				+'</div>'
				+'<div class="row">'
					+'<div class="col-sm-12">'
						+'<div class="form-group">'
							+'<div class="input-group">'
								+'<div class="input-group-prepend">'
									+'<div class="input-group-text"><i class = "material-icons">lock</i></div>'
								+'</div>'
								+'<input type="password" class="form-control" id="senha" placeholder="Senha">'
							+'</div>'
						+'</div>'
					+'</div>'
				+'</div>'
				+'<div class="row">'
					+'<div class="col-sm-12">'
						+'<div class="form-group">'
							+'<div class="input-group">'
								+'<div class="input-group-prepend">'
									+'<div class="input-group-text"><i class = "material-icons">lock</i></div>'
								+'</div>'
								+'<input type="password" class="form-control" id="senhaConfirmada" placeholder="Confirmar senha">'
							+'</div>'
						+'</div>'
					+'</div>'
				+'</div>'
				+'<br/>'
				+'<a href="index.php"> <button type="submit" class="btn-block btn-dark">Cadastrar</button> </a>';

				document.getElementById('avisoFooter').innerHTML = 'Já se cadastrou? <a href="#" onclick = "geraForm(\'login\')">Faça Login</a>';
			}

			document.getElementById('form_index').innerHTML = HTML;
		}
	</script>
<body onload = "geraForm('login')">
	<div class="fundo w3-display-container w3-animate-opacity">
		<main>
			<div class="w3-display-middle">
				<div class = "w3-animate-opacity text-center"  style="margin-top:10px;">
					<h1>Conectar</h1>
				</div>

				<div class="card text-center w3-animate-top">
					<div class="card-body" id = "form_index">
						<!--O HTML da função geraForm é criado aqui-->
					</div>
					<div id = "avisoFooter" class="card-footer text-muted">
						<!--Novo na plataforma? <a href="cadastro.php"> Registrar-se </a>-->
						Novo na plataforma? <a href="#" onclick = "geraForm('cadastro')"> Registrar-se </a>
					</div>
				</div>

				<div class = "w3-animate-opacity text-center"  style="margin-top:10px;">
					<hr class="w3-border-black" style="margin:auto;width:50%">
					<p class="w3-large">Seja bem-vindo</p>
				</div>
			</div>
		</main>
	</div>

	<?php
		rodape();
	?>
