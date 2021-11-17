<?php
	include "funcoesEstruturais.php";
	//Estrutura head
	head();

	//Se o usuário estiver logado
		if(isset($_SESSION["usuario"])){
		//Cabeçalho da página para usuários logados
		cabecalhoUsuarioLogado();
	}else{ //Se não estiver logado
			header('Location: index.php');
	}
?>
<script src='http://momentjs.com/downloads/moment.min.js'></script>
<script>
	$.ajax({
		url: 'http://cartolatccapi.herokuapp.com/rodadas',
		timeout: 3000,
		method: 'GET',
		dataType: 'json',
		success: function(dados){
			for (var i = 0; i < 38; i++) {
				if(moment().isBetween(dados[i].inicio, dados[i].fim)){
					var rodada = dados[i].rodada_id;
					var link = "https://api.cartolafc.globo.com/partidas/"
					var urlAPI = link + rodada

					$.ajax({
						url: urlAPI,
						timeout: 3000,
						method: 'GET',
						dataType: 'json',
                        headers: {
							"accept": "application/json",
							"Access-Control-Allow-Origin":"*"
						},
						success: function(dados){	
							var HTML = "";
							for (var i = 0; i < 10; i++) {																			
								var mandanteID = dados.partidas[i].clube_casa_id;
								var visitanteID = dados.partidas[i].clube_visitante_id;
								
								if(dados.partidas[i].placar_oficial_mandante){
									HTML += '<div class = "jogo_container offset-1 col-10 jogo_card">';
									HTML += '<div class = "infoJogo">';
									HTML += '<p class = "text-center">'+ dados.partidas[i].local + '</p>';
									HTML += '</div>';
									HTML += '<div class = "row">';
									HTML += '<div class = "col" style = "text-align: left; height: 100%; margin: auto 0;">';
									HTML += '<img src = "'+ dados.clubes[mandanteID].escudos["60x60"] +'" alt="EscudoTime" class = "escudoTime"/>';
									HTML += ''+ dados.clubes[mandanteID].nome +'';
									HTML += '</div>';
									HTML += '<div class = "col" style = "text-align: center;  height: 100%; margin: auto 0;">';
									HTML += '<h1>'+ dados.partidas[i].placar_oficial_mandante +' <b>  X  </b>'+ dados.partidas[i].placar_oficial_visitante +'</h1>';				
									HTML += '</div>';
									HTML += '<div class = "col" style = "text-align: right;  height: 100%; margin: auto 0;">';
									HTML += ''+ dados.clubes[visitanteID].nome +'';
									HTML += '<img src = "'+ dados.clubes[visitanteID].escudos["60x60"] +'" alt="EscudoTime" class = "escudoTime"/>';
									HTML += '</div>';
									HTML += '</div>';
									HTML += '<div>';
									HTML += '<p class = "text-center infoJogo">'+ dados.partidas[i].partida_data +'</p>';
									HTML += '</div>';
									HTML += '</div> <br/>';
									var result = document.getElementById("pagina").innerHTML = HTML
								}							
							}
						}
					});
				}else if(moment(dados[i].inicio).isAfter()){ 
					var rodada = dados[i-1].rodada_id;
					var link = "https://api.cartolafc.globo.com/partidas/"
					var urlAPI = link + rodada

					$.ajax({
						url: urlAPI,
						timeout: 3000,
						method: 'GET',
						dataType: 'json',
						success: function(dados){	
							var HTML = "";
							for (var i = 0; i < 10; i++) {																			
								var mandanteID = dados.partidas[i].clube_casa_id;
								var visitanteID = dados.partidas[i].clube_visitante_id;
								
								if(dados.partidas[i].placar_oficial_mandante){
									HTML += '<div class = "jogo_container offset-1 col-10 jogo_card">';
									HTML += '<div class = "infoJogo">';
									HTML += '<p class = "text-center">'+ dados.partidas[i].local + '</p>';
									HTML += '</div>';
									HTML += '<div class = "row">';
									HTML += '<div class = "col" style = "text-align: left; height: 100%; margin: auto 0;">';
									HTML += '<img src = "'+ dados.clubes[mandanteID].escudos["60x60"] +'" alt="EscudoTime" class = "escudoTime"/>';
									HTML += ''+ dados.clubes[mandanteID].nome +'';
									HTML += '</div>';
									HTML += '<div class = "col" style = "text-align: center;  height: 100%; margin: auto 0;">';
									HTML += '<h1>'+ dados.partidas[i].placar_oficial_mandante +' <b>  X  </b>'+ dados.partidas[i].placar_oficial_visitante +'</h1>';				
									HTML += '</div>';
									HTML += '<div class = "col" style = "text-align: right;  height: 100%; margin: auto 0;">';
									HTML += ''+ dados.clubes[visitanteID].nome +'';
									HTML += '<img src = "'+ dados.clubes[visitanteID].escudos["60x60"] +'" alt="EscudoTime" class = "escudoTime"/>';
									HTML += '</div>';
									HTML += '</div>';
									HTML += '<div>';
									HTML += '<p class = "text-center infoJogo">'+ dados.partidas[i].partida_data +'</p>';
									HTML += '</div>';
									HTML += '</div> <br/>';
									var result = document.getElementById("pagina").innerHTML = HTML
								}							
							}
						}
					});
				}
			}
		}
	});		 
</script>
<h1 class = "text-center pageTitle"><b>RODADAS DA SEMANA</b></h1>
<div id = "pagina" class = "container">
</div>

<?php
	//Rodapé da página
  rodape();
?>
