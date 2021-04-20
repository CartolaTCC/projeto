<?php
	include "constSession.php";
	include "funcoesEstruturais.php";
	//Estrutura head
	head();

  //Se o usuário estiver logado
  if(empty($_SESSION[SESSAO])){
  	//Cabeçalho da página para usuários logados
  	cabecalhoUsuarioLogado();
  }else{ //Se não estiver logado
    header('Location: index.php');
  }
?>

<h1 class = "text-center pageTitle"><b>RODADAS DA SEMANA</b></h1>

<div class = "container">

	<!--Container do jogo (informações do time e dos resultado)-->
	<div class = "jogo_container offset-1 col-10 jogo_card">

		<!--Header do card: nome do estádio-->
		<div class = "infoJogo">
			<p class = "text-center">Estádio Vasco da Gama</p>
		</div>

		<!--Main do card: informações sobre a partida-->
		<div class = "row">
			<div class = "col" style = "text-align: left; height: 100%; margin: auto 0;">
				<img src = "../img/escudos/fluminense.png" alt="EscudoTime" class = "escudoTime"/>
				FLUMINENSE
			</div>
			<div class = "col" style = "text-align: center;  height: 100%; margin: auto 0;">
				<h1>2 <b>X</b> 0</h1>
			</div>
			<div class = "col" style = "text-align: right;  height: 100%; margin: auto 0;">
				BOTAFOGO
				<img src = "../img/escudos/botafogo.png" alt="EscudoTime" class = "escudoTime"/>
			</div>
		</div>

		<!--Footer do card: data do jogo-->
		<div>
			<p class = "text-center infoJogo">24/01/2020</p>
		</div>
	</div>

	<!--Container do jogo (informações do time e dos resultado)-->
	<div class = "jogo_container offset-1 col-10 jogo_card">

		<!--Header do card: nome do estádio-->
		<div class = "infoJogo">
			<p class = "text-center">Estádio Antônio Accioly</p>
		</div>

		<!--Main do card: informações sobre a partida-->
		<div class = "row">
			<div class = "col" style = "text-align: left; height: 100%; margin: auto 0;">
				<img src = "../img/escudos/atleticogo.png" alt="EscudoTime" class = "escudoTime"/>
				ATLÉTICO-GO
			</div>
			<div class = "col" style = "text-align: center;  height: 100%; margin: auto 0;">
				<h1>2 <b>X</b> 0</h1>
			</div>
			<div class = "col" style = "text-align: right;  height: 100%; margin: auto 0;">
				FORTALEZA
				<img src = "../img/escudos/fortaleza.png" alt="EscudoTime" class = "escudoTime"/>
			</div>
		</div>

		<!--Footer do card: data do jogo-->
		<div>
			<p class = "text-center infoJogo">24/01/2020</p>
		</div>
	</div>

	<!--Container do jogo (informações do time e dos resultado)-->
	<div class = "jogo_container offset-1 col-10 jogo_card">

		<!--Header do card: nome do estádio-->
		<div class = "infoJogo">
			<p class = "text-center">Adelmar da Costa Carvalho</p>
		</div>

		<!--Main do card: informações sobre a partida-->
		<div class = "row">
			<div class = "col" style = "text-align: left; height: 100%; margin: auto 0;">
				<img src = "../img/escudos/sportrecife.png" alt="EscudoTime" class = "escudoTime"/>
				SPORT RECIFE
			</div>
			<div class = "col" style = "text-align: center;  height: 100%; margin: auto 0;">
				<h1>2 <b>X</b> 0</h1>
			</div>
			<div class = "col" style = "text-align: right;  height: 100%; margin: auto 0;">
				BAHIA
				<img src = "../img/escudos/bahia.png" alt="EscudoTime" class = "escudoTime"/>
			</div>
		</div>

		<!--Footer do card: data do jogo-->
		<div>
			<p class = "text-center infoJogo">24/01/2020</p>
		</div>
	</div>
</div>

<?php
	//Rodapé da página
  rodape();
?>
