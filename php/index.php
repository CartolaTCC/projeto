<!DOCTYPE html>
<html lang = "pt-BR">
<head>
	<title>Projeto - TCC</title>
	<link rel="shortcut icon" href="../img/logo.jpg" >
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/w3.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/estilo.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/login.css" />	
	<link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>
	<div class="fundo w3-display-container w3-animate-opacity w3-text-white">
		<div class="w3-display-topleft w3-padding-large w3-xlarge">
			TCC
		</div>
		<div class="w3-display-middle">
			<h1 class="w3-jumbo w3-animate-top">CONECTAR</h1>

			<div class="card text-center w3-animate-top">
				<div class="card-body">
					<form id = "form_index" name="form_index">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class = "material-icons">email</i></div>
										</div>
										<input type="text" class="form-control" id="email" placeholder="E-mail">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class = "material-icons">lock</i></div>
										</div>
										<input type="text" class="form-control" id="senha" placeholder="Senha">
									</div>
								</div>
							</div>						
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="lembrar_senha">
									<label class="form-check-label" for="lembrar_senha">Lembrar-se</label>							
								</div>
							</div>
						</div>
						<br/> 
						<button type="button" class="btn-block btn-dark">Entrar</button>	
					</form>
				</div>
				<div class="card-footer text-muted">
					Novo na plataforma? <a href="cadastro.php"> Registrar-se </a>
				</div>
			</div>

			<div class = "w3-animate-opacity text-center"  style="margin-top:10px;">
				<hr class="w3-border-white" style="margin:auto;width:50%">
				<p class="w3-large">Seja bem-vindo</p>
			</div>
		</div>
	</div>
</body>
</html>		