<!DOCTYPE html>
<html lang  =  "pt-BR">
    <head>
    	<meta charset  =  "UTF-8" name  =  "viewport" content  =  "width=device-width, initial-scale=1">

        <link rel = "stylesheet" href = "../css/w3.css">
    	<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.min.css" />
    	<link rel = "stylesheet" type = "text/css" href = "../css/estilo.css" />
    	<link rel = "stylesheet" type = "text/css" href = "../css/perfil.css" />
    	<link rel = "stylesheet" type = "text/css" href = "../css/cabecalho.css" />

        <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel  =  "stylesheet"/>
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Raleway">
        <link rel = "shortcut icon" href = "../img/logo.jpg" >

    	<script src = '../js/jquery-3.5.1.min.js'></script>
    	<script src = "../js/bootstrap.min.js" ></script>

        <title>Projeto - TCC</title>

		<style>
			.jogo_container{
				padding-top: 10px;
				padding-bottom: 10px;
			}

			.jogo_card{
				border: 1px solid black;
				border-radius: 5px;
			}


			.escudoTime{
				width: 100px;

				margin: 10px;
			}

			p{
				font-size: 20px;
			}
		</style>
    </head>
    <body>
        <!--Cabeçalho-->
        <nav class="navbar navbar-expand-lg cabecalho">
    		<div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0" style="margin-left:22%;">
    			<ul class="navbar-nav ml-auto text-center">
    				<li class="nav-item active">
    					<a class="nav-link ranking" href="#">Ranking</a>
    				</li>
    			</ul>
    		</div>
    		<div class="mx-auto my-2 order-0 order-md-1 position-relative">
    			<a class="mx-auto" href="home.php"><img src="../img/logo.jpg" class="cartola" alt="home" style="width: 50%; margin-left:25%;"/></a>
    			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
    					<span class="navbar-toggler-icon"></span>
    			</button>
    		</div>
    		<div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
    			<ul class="navbar-nav mr-auto text-center">
    				<li class="nav-item">
    					<a class="nav-link linkEscalacao" href="escalacao.php">Escalação</a>
    				</li>
    			</ul>
    		</div>

    		<div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
    			<div class="dropdown" style="margin-left:60%">
    				<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    						<a class="mx-auto" href="#"><img src="../img/engrenagem.png" class="cartola" alt="home" style="width: 60%;"/></a>
    				</button>
    				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    					<a class="dropdown-item" href="perfil.php"><img src="../img/foto.png" alt="meu perfil" style="width: 30%;"/>Meu perfil</a>
    					<a class="dropdown-item" href="index.php"><img src="../img/exit.png" alt="sair" style="width: 30%;"/>Sair</a>
    				</div>
    			</div>
    		</div>
    	</nav>

        <!--Escopo principal-->
        <main>
            <h1 class = "text-center">RODADAS DA SEMANA</h1>

			<div class = "container">

				<!--Container do jogo-->
				<div class = "jogo_container">

					<!--Card do jogo (informações do time e dos resultado)-->
					<div class = "offset-1 col-10 jogo_card">

						<!--Header do card: nome do estádio-->
						<div>
							<p class = "text-center">Estádio Vasco da Gama</p>
						</div>

						<!--Main do card: informações sobre a partida-->
						<div class = "row">
							<div class = "col" style = "text-align: left; height: 100%; margin: auto 0;">
								<img src = "../img/escudos/fluminense.png" class = "escudoTime"/>
								FLUMINENSE
							</div>
							<div class = "col" style = "text-align: center;  height: 100%; margin: auto 0;">
								<h1>2 <b>X</b> 0</h1>
							</div>
							<div class = "col" style = "text-align: right;  height: 100%; margin: auto 0;">
								BOTAFOGO
								<img src = "../img/escudos/botafogo.png" class = "escudoTime"/>

							</div>
						</div>

						<!--Footer do card: data do jogo-->
						<div>
							<p class = "text-center">24/01/2020</p>
						</div>
					</div>
				</div>

				<!--Container do jogo-->
				<div class = "jogo_container">

					<!--Card do jogo (informações do time e dos resultado)-->
					<div class = "offset-1 col-10 jogo_card">

						<!--Header do card: nome do estádio-->
						<div>
							<p class = "text-center">Estádio Antônio Accioly</p>
						</div>

						<!--Main do card: informações sobre a partida-->
						<div class = "row">
							<div class = "col" style = "text-align: left; height: 100%; margin: auto 0;">
								<img src = "../img/escudos/atleticogo.png" class = "escudoTime"/>
								ATLÉTICO-GO
							</div>
							<div class = "col" style = "text-align: center;  height: 100%; margin: auto 0;">
								<h1>2 <b>X</b> 0</h1>
							</div>
							<div class = "col" style = "text-align: right;  height: 100%; margin: auto 0;">
								FORTALEZA
								<img src = "../img/escudos/fortaleza.png" class = "escudoTime"/>

							</div>
						</div>

						<!--Footer do card: data do jogo-->
						<div>
							<p class = "text-center">24/01/2020</p>
						</div>
					</div>
				</div>

				<!--Container do jogo-->
				<div class = "jogo_container">

					<!--Card do jogo (informações do time e dos resultado)-->
					<div class = "offset-1 col-10 jogo_card">

						<!--Header do card: nome do estádio-->
						<div>
							<p class = "text-center">Adelmar da Costa Carvalho</p>
						</div>

						<!--Main do card: informações sobre a partida-->
						<div class = "row">
							<div class = "col" style = "text-align: left; height: 100%; margin: auto 0;">
								<img src = "../img/escudos/sportrecife.png" class = "escudoTime"/>
								SPORT RECIFE
							</div>
							<div class = "col" style = "text-align: center;  height: 100%; margin: auto 0;">
								<h1>2 <b>X</b> 0</h1>
							</div>
							<div class = "col" style = "text-align: right;  height: 100%; margin: auto 0;">
								BAHIA
								<img src = "../img/escudos/bahia.png" class = "escudoTime"/>

							</div>
						</div>

						<!--Footer do card: data do jogo-->
						<div>
							<p class = "text-center">24/01/2020</p>
						</div>
					</div>
				</div>
			</div>
        </main>
    </body>
</html>
