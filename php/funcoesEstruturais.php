<?php

	session_start();

	//função da estrutura header
	function head(){
		$head = "";

		$head = "<!DOCTYPE html>\n";
		$head .= "<html lang='pt-BR'>\n";
		$head .= "\t<head>\n";
		$head .= "\t\t<meta charset='UTF-8' />\n\n";

		$head .= "\t\t<title>Projeto - TCC</title>\n\n";

		$head .= "\t\t<meta charset='UTF-8' name='viewport' content='width=device-width, initial-scale=1'>\n\n";

		$head .= "\t\t<link rel='shortcut icon' href='../img/logo.png' >\n\n";

		$head .= "\t\t<link rel='stylesheet' href='../css/w3.css'>\n\n";
		$head .= "\t\t<link rel='stylesheet' type='text/css' href='../css/bootstrap.min.css' />\n\n";

		$head .= "\t\t<link rel='stylesheet' type='text/css' href='../css/estilo.css' />\n\n";

		$head .= "\t\t<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>\n\n";
		$head .= "\t\t<link rel='stylesheet' href = 'https://fonts.googleapis.com/icon?family=Material+Icons' />\n\n";

		$head .= "\t\t<script src='../js/jquery-3.5.1.min.js'></script>\n\n";
		$head .= "\t\t<script src='../js/bootstrap.min.js' ></script>\n\n";
		$head .= "\t\t<script src='../js/popper.min.js'></script>\n\n";

		$head .= "\t</head>\n";

		echo $head;
	}

	//Cabeçalho da página para usuários logados
	function cabecalhoUsuarioLogado(){
		$cabecalho = "";

		$cabecalho .= "\t<nav class='navbar navbar-expand-md navbar-light' style='background-color: #E67E22; font-size: 20px; font-weight: bold;'>";

		$cabecalho .= "\t\t<!--Primeiro item da ordem - necessário para o nav ficar formatado-->";
		$cabecalho .= "\t\t<div class='navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2'></div>";

		$cabecalho .= "\t\t<!--Segundo item da ordem - Elementos que estão no meio-->";
		$cabecalho .= "\t\t<div class='mx-auto order-0'>";

		$cabecalho .= "\t\t\t<!--Elementos centrais-->";
		$cabecalho .= "\t\t\t<ul class='navbar-nav ml-auto'>";
		$cabecalho .= "\t\t\t\t<li class='nav-item'>";
		$cabecalho .= "\t\t\t\t\t<a class='nav-link' href='ranking.php'>Ranking</a>";
		$cabecalho .= "\t\t\t\t</li>";

		$cabecalho .= "\t\t\t\t<li class='nav-item'>";
		$cabecalho .= "\t\t\t\t\t<a class='navbar-brand mx-auto' href='home.php'>";
		$cabecalho .= "\t\t\t\t\t\t<img src='../img/logo.png' alt='home' style='width: 50px;'/>";
		$cabecalho .= "\t\t\t\t\t</a>";
		$cabecalho .= "\t\t\t\t</li>";

		$cabecalho .= "\t\t\t\t<li class='nav-item'>";
		$cabecalho .= "\t\t\t\t\t<a class='nav-link' href='escalacao.php'>Escalação</a>";
		$cabecalho .= "\t\t\t\t</li>";
		$cabecalho .= "\t\t\t</ul>";

		$cabecalho .= "\t\t\t<!--Botão para expandir os itens-->";
		$cabecalho .= "\t\t\t<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='.dual-collapse2'>";
		$cabecalho .= "\t\t\t\t<span class='navbar-toggler-icon'></span>";
		$cabecalho .= "\t\t\t</button>";
		$cabecalho .= "\t\t</div>";

		$cabecalho .= "\t\t<!--Terceiro item da ordem - Elementos que estão a direita-->";
		$cabecalho .= "\t\t<div class='navbar-collapse collapse w-100 order-3 dual-collapse2'>";
		$cabecalho .= "\t\t\t<ul class='navbar-nav ml-auto'>";
		$cabecalho .= "\t\t\t\t<li class='nav-item'>";
		$cabecalho .= "\t\t\t\t\t<div class='dropdown'>";
		$cabecalho .= "\t\t\t\t\t\t<button class='btn dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
		$cabecalho .= "\t\t\t\t\t\t\t<a class='mx-auto' href='#''><img src='../img/engrenagem.png' class='cartola' alt='home' style='width: 40px;'/></a>";
		$cabecalho .= "\t\t\t\t\t\t</button>";
		$cabecalho .= "\t\t\t\t\t\t<div class='dropdown-menu dropdown-menu-right' aria-labelledby='dropdownMenuButton'>";
		$cabecalho .= "\t\t\t\t\t\t\t<a class='dropdown-item' href='perfil.php'><img src='../img/foto.png' alt ='meu perfil' style='width: 30px;'/>Meu perfil</a>";
		$cabecalho .= "\t\t\t\t\t\t\t<a class = 'dropdown-item' href = 'index.php'><img src = '../img/exit.png' alt = 'sair' style = 'width: 30px;'/>Sair</a>";
		$cabecalho .= "\t\t\t\t\t\t</div>";
		$cabecalho .= "\t\t\t\t\t</div>";
		$cabecalho .= "\t\t\t\t</li>";
		$cabecalho .= "\t\t\t</ul>";
		$cabecalho .= "\t\t</div>";
		$cabecalho .= "\t</nav>";

		$cabecalho .= "\t<div class='navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2'>";
		$cabecalho .= "\t\t<div class='dropdown'>";
		$cabecalho .= "\t\t\t<button class='btn dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
		$cabecalho .= "\t\t\t\t<a class='mx-auto' href='#'><img src='../img/engrenagem.png' class='cartola' alt='home' style='width: 40%;'/></a>";
		$cabecalho .= "\t\t\t</button>";
		$cabecalho .= "\t\t\t<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
		$cabecalho .= "\t\t\t\t<a class='dropdown-item' href='sair.php'><img src='../img/foto.png' alt='meu perfil' style='width: 30%;'/>Meu perfil</a>";
		$cabecalho .= "\t\t\t\t<a class='dropdown-item' href='sair.php'><img src='../img/exit.png' alt='sair' style='width: 30%;'/>Sair</a>";
		$cabecalho .= "\t\t\t</div>";
		$cabecalho .= "\t\t</div>";
		$cabecalho .= "\t</div>";

		echo $cabecalho;
	}

	//cabecalho para usuarios não logados
	function cabecalhoUsuarioNaoLogado(){
		$cabecalho = "";

		$cabecalho .= "\t<!--Cabeçalho-->";
		$cabecalho .= "\t<nav class='navbar navbar-expand-md navbar-light' style='background-color: #E67E22; font-size: 20px; font-weight: bold;'>";

		$cabecalho .= "\t\t<!--Primeiro item da ordem - necessário para o nav ficar formatado-->";
		$cabecalho .= "\t\t<div class='navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2'></div>";

		$cabecalho .= "\t\t<!--Segundo item da ordem - Elementos que estão no meio-->";
		$cabecalho .= "\t\t<div class='mx-auto order-0'>";

		$cabecalho .= "\t\t\t<!--Elementos centrais-->";
		$cabecalho .= "\t\t\t<ul class='navbar-nav ml-auto'>";
		$cabecalho .= "\t\t\t\t<li class='nav-item'>";
		$cabecalho .= "\t\t\t\t\t<a class='navbar-brand mx-auto' href='index.php'>";
		$cabecalho .= "\t\t\t\t\t\t<img src='../img/logo.png' alt='home' style='width: 50px;'/>";
		$cabecalho .= "\t\t\t\t\t</a>";
		$cabecalho .= "\t\t\t\t</li>";
		$cabecalho .= "\t\t\t</ul>";

		$cabecalho .= "\t\t\t<!--Botão para expandir os itens-->";
		$cabecalho .= "\t\t\t<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='.dual-collapse2'>";
		$cabecalho .= "\t\t\t\t<span class='navbar-toggler-icon'></span>";
		$cabecalho .= "\t\t\t</button>";
		$cabecalho .= "\t\t</div>";

		$cabecalho .= "\t\t<!--Terceiro item da ordem - Elementos que estão a direita-->";
		$cabecalho .= "\t\t<div class='navbar-collapse collapse w-100 order-3 dual-collapse2'></div>";
		$cabecalho .= "\t</nav>";

		echo $cabecalho;
	}

	function rodape(){
		$rodape = "";

		$rodape .= "<hr/>";
		$rodape .= "<!--Footer-->";
		$rodape .= "\t\t<footer id='sticky-footer' class='py-4'>";
		$rodape .= "\t\t\t<p class='text-center'>Precisa de ajuda? leia nossa <a href='sobre.php'>documentação</a> ou entre em contato com os desenvolvedores através de um desses e-mails:</p>";

		$rodape .= "\t\t\t<p class='text-center'>Amanda Ancelmo: amandabolattoancelmo@gmail.com</p>";
		$rodape .= "\t\t\t<p class='text-center'>Renan Martins: renan2204@outlook.com</p>";
		$rodape .= "\t\t\t<p class='text-center'>Yuri Kanegae: yurikanegae@gmail.com</p>";
		$rodape .= "\t\t</footer>";
		$rodape .= "\t</body>";
		$rodape .= "</html>";

		echo $rodape;
	}
?>
