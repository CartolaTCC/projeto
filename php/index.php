<!DOCTYPE html>
<html lang = "pt-BR">
<head>
	<title>Projeto - TCC</title>
	<link rel="shortcut icon" href="../img/logo.jpg" >
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/w3.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
	<link rel="stylesheet" type="text/css" href="../css/login.css" />
	<script src='../js/jquery-3.5.1.min.js'></script>
	<script src="../js/bootstrap.min.js" ></script>
	<link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

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
										+'<div class="input-group-text"><i class = "material-icons">email</i></div>'
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
										+'<div class="input-group-text"><i class = "material-icons">lock</i></div>'
									+'</div>'
									+'<input type="text" class="form-control" id="senha" placeholder="Senha" required>'
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
									+'<div class="input-group-text"><i class = "material-icons">lock</i></div>'
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
								+'<input type="text" class="form-control" id="senha" placeholder="Senha">'
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
								+'<input type="text" class="form-control" id="senhaConfirmada" placeholder="Confirmar senha">'
							+'</div>'
						+'</div>'
					+'</div>'
				+'</div>'
				+'<br/>'
				+'<button type="submit" class="btn-block btn-dark">Cadastrar</button>';

				document.getElementById('avisoFooter').innerHTML = 'Já se cadastrou? <a href="#" onclick = "geraForm(\'login\')">Faça Login</a>';
			}

			document.getElementById('form_index').innerHTML = HTML;
		}
	</script>
</head>
<body onload = "geraForm('login')">
	<div class="fundo w3-display-container w3-animate-opacity w3-text-white">
		<div class="w3-display-topleft w3-padding-large w3-xlarge">
			TCC
		</div>
		<main>
			<div class="w3-display-middle">
				<h1 class="w3-jumbo w3-animate-top">CONECTAR</h1>

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
					<hr class="w3-border-white" style="margin:auto;width:50%">
					<p class="w3-large">Seja bem-vindo</p>
				</div>
			</div>
		</main>
	</div>
</body>
</html>
