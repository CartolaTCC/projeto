<?php
	include "funcoesEstruturais.php";
	//Estrutura head
	head();

  //Se o usuário estiver logado
	if(isset($_SESSION["usuario"])){
		header('Location: home.php');
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
		$("input[name='nomeUsuario']").on('blur', function(){
			var nomeUsuario = $(this).val();
			$.get('usuario.php?nomeUsuario=' + nomeUsuario, function(data){
				$('#resultado').html(data);
			});
		});

		function geraForm(tipo){
			if(tipo == 'login'){
				var HTML = '<form action="autenticacao.php" method="POST" name="form_index">'
						+'<div class="row">'
						+'<div class="col-sm-12">'
							+'<div class="form-group">'
								+'<div class="input-group">'
									+'<div class="input-group-prepend">'
										+'<label for="email"><div class="input-group-text"><i class = "material-icons">email</i></div></label>'
									+'</div>'
									<?php $lembranca = (isset($_COOKIE["cookieUser"])) ? $_COOKIE['cookieUser'] : "E-mail";?>
									+'<input type="text" class="form-control" id="email" name="emailLogin" value=".<?php echo $lembranca ?>." required>'
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
									+'<input type="password" class="form-control" id="senha" name="senhaLogin" placeholder="Senha" required>'
								+'</div>'
							+'</div>'
						+'</div>'
					+'</div>'
					+'<div class="row">'
						+'<div class="col-sm-12">'
							+'<div class="form-check">'
								+'<input class="form-check-input" type="checkbox" name="lembrar_usuario" id="lembrar_usuario">'
								+'<label class="form-check-label" for="lembrar_usuario">Lembrar usuário</label>'
							+'</div>'
						+'</div>'
					+'</div>'
					+'<br/>'
					+'<input type="hidden" id="tipoForm" name="tipoForm" value="0">'
					+'<button type="submit" class="btn-block btn-dark">Entrar</button>'
				+'</form>';

				document.getElementById('avisoFooter').innerHTML = 'Novo na plataforma? <a href="#" onclick = "geraForm(\'cadastro\')"> Registrar-se </a>';
			}else if(tipo == 'cadastro'){
				var HTML = '<form action="autenticacao.php" method="POST" name="form_index">'
				+'<div class="row">'
					+'<div class="col-sm-12">'
						+'<div class="form-group">'
							+'<div class="input-group">'
								+'<div class="input-group-prepend">'
									+'<div class="input-group-text"><i class = "material-icons">email</i></div>'
								+'</div>'
								+'<input type="text" class="form-control" id="email" name="email" placeholder="E-mail">'
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
								+'<input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Nome de usuário">'
								+'<div id="resultado"></div>'
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
								+'<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">'
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
								+'<input type="password" class="form-control" id="senhaConfirmada" name="confirmaSenha" placeholder="Confirmar senha">'
							+'</div>'
						+'</div>'
					+'</div>'
				+'</div>'
				+'<br/>'
				+'<input type="hidden" id="tipoForm" name="tipoForm" value="1">'
				+'<a href="index.php"> <button type="submit" class="btn-block btn-dark">Cadastrar</button> </a>';

				document.getElementById('avisoFooter').innerHTML = 'Já se cadastrou? <a href="#" onclick = "geraForm(\'login\')">Faça Login</a>';
			}

			document.getElementById('form_index').innerHTML = HTML;
		}
	</script>
<body onload = "geraForm('login')">

	<div class="fundo w3-display-container w3-animate-opacity">

		<?php
			if(!empty($_GET) && $_GET['erro']==1){
				echo "
					<div class = 'container' style='padding-top: 5%; text-align: center; width: 25%;'>
							<div class='alert alert-danger' role='alert'>
									E-mail ou nome já cadastrado!
							</div>
					</div>
					";
			}else if(!empty($_GET) && $_GET['erro']==0){
				echo "
					<div class = 'container' style='padding-top: 5%; text-align: center; width: 25%;'>
							<div class='alert alert-danger' role='alert'>
									E-mail ou senha incorretos!
							</div>
					</div>
					";

			}else if(!empty($_GET) && $_GET['erro']==2){
				echo "
					<div class = 'container' style='padding-top: 5%; text-align: center; width: 25%;'>
							<div class='alert alert-danger' role='alert'>
									Senha e confirmar senha não correspondem!
							</div>
					</div>
					";
			}else if(!empty($_GET) && $_GET['erro']==3){
				echo "
					<div class = 'container' style='padding-top: 5%; text-align: center; width: 25%;'>
							<div class='alert alert-success' role='alert'>
									Cadastro bem sucedido!
							</div>
					</div>
					";
			}
		?>

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
