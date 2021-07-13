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

<body onload = "selectScouts()">
    <!--Escopo principal-->
    <main>
        <h1 class = "text-center pageTitle"><b>TABELA DOS JOGADORES</b></h1>

        <!--Form de atualização-->
        <form>
            <div class = "row">
                <div class = "col-3 offset-2">
                  <label for='rodada'>Rodada atual:</label>
                  <input type="number" id="rodada_atual" name="rodada"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1, 2, 3..." required/>
                </div>
                <div class = "col-3 offset-2">
                  <label for='janela'>Janela de análise:</label>
                  <input type="number" id="janela_analise" name="janela"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1, 2, 3..." required/>
                </div>
            </div>
            <div class="row">
              <div class="col-4 offset-2">
                <h5>Escolha os dois scouts para cada posição:</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-2 offset-2">
                Atacante:
              </div>
              <div class="col-3">
                <select id="ata_scout1" class="select form-control">

                </select>
              </div>
              <div class="col-3">
                <select id="ata_scout2" class="select form-control">

                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-2 offset-2">
                Goleiro:
              </div>
              <div class="col-3">
                <select id="gol_scout1" class="select form-control">

                </select>
              </div>
              <div class="col-3">
                <select id="gol_scout2" class="select form-control">

                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-2 offset-2">
                Lateral:
              </div>
              <div class="col-3">
                <select id="lat_scout1" class="select form-control">

                </select>
              </div>
              <div class="col-3">
                <select id="lat_scout2" class="select form-control">

                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-2 offset-2">
                Meia:
              </div>
              <div class="col-3">
                <select id="mei_scout1" class="select form-control">

                </select>
              </div>
              <div class="col-3">
                <select id="mei_scout2" class="select form-control">

                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-2 offset-2">
                Técnico:
              </div>
              <div class="col-3">
                <select id="tec_scout1" class="select form-control">

                </select>
              </div>
              <div class="col-3">
                <select id="tec_scout2" class="select form-control">

                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-2 offset-2">
                Zagueiro:
              </div>
              <div class="col-3">
                <select id="zag_scout1" class="select form-control">

                </select>
              </div>
              <div class="col-3">
                <select id="zag_scout2" class="select form-control">

                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-2 offset-2">
                <div onclick="requisicao()" class="btn corBotao">Enviar</div>
              </div>
            </div>
        </form>

        <tr style = "background-color: #E67E22;">

        </tr>

        <!--Tabela dos scouts-->
        <div class = "container">
            <table style="width: 100%; text-align: center">
                <thead class = "cabecalhoTable" id = "thead"></thead>

                <tbody id = "tbody">

                </tbody>
            </table>
        </div>

        </main>

<?php
	//Rodapé da página
  rodape();
?>

<script>


ESCALACAO = '';
SOMAPONTUACAO = 0;
SOMAPRECO = 0;

    function selectScouts(){
      var HTML='<option value="10">Finalização Defendida</option>'
+'<option value="2">Gol</option>'
+'<option value="13">Assistência</option>'
+'<option value="4">Cartão Amarelo</option>'
+'<option value="15">Cartão Vermelho</option>'
+'<option value="8">Defesa Difícil</option>'
+'<option value="6">Desarme</option>'
+'<option value="5">Falta Cometida</option>'
+'<option value="1">Falta Sofrida</option>'
+'<option value="7">Finalização na Trave</option>'
+'<option value="0">Finalização para Fora</option>'
+'<option value="11">Gol Contra</option>'
+'<option value="9">Gol Sofrido</option>'
+'<option value="14">Impedimento</option>'
+'<option value="3">Passe Incompleto</option>'
+'<option value="16">Pênalti Perdido</option>'
+'<option value="12">Saldo de Gols (sem sofrer gol)</option>';

$(".select").html(HTML);
    }

    function requisicao(){
      var rodada_atual = document.getElementById("rodada_atual").value;
      var janela_analise = document.getElementById("janela_analise").value;
      var ata_scout1 = document.getElementById("ata_scout1").value;
      var ata_scout2 = document.getElementById("ata_scout2").value;
      var gol_scout1 = document.getElementById("gol_scout1").value;
      var gol_scout2 = document.getElementById("gol_scout2").value;
      var lat_scout1 = document.getElementById("lat_scout1").value;
      var lat_scout2 = document.getElementById("lat_scout2").value;
      var mei_scout1 = document.getElementById("mei_scout1").value;
      var mei_scout2 = document.getElementById("mei_scout2").value;
      var tec_scout1 = document.getElementById("tec_scout1").value;
      var tec_scout2 = document.getElementById("tec_scout2").value;
      var zag_scout1 = document.getElementById("zag_scout1").value;
      var zag_scout2 = document.getElementById("zag_scout2").value;

      var dados = {"rodada_atual": rodada_atual, "janela_analise": janela_analise,
				"ata_scout1": ata_scout1, "ata_scout2": ata_scout2,
				"gol_scout1": gol_scout1, "gol_scout2": gol_scout2,
				"lat_scout1": lat_scout1, "lat_scout2": lat_scout2,
				"mei_scout1": mei_scout1, "mei_scout2": mei_scout2,
				"tec_scout1": tec_scout1, "tec_scout2": tec_scout2,
				"zag_scout1": zag_scout1, "zag_scout2": zag_scout2
			};


			$.ajax({
				url: 'https://cartolatccapi.herokuapp.com/time',
				timeout: 3000,
				method: 'GET',
				dataType: 'json',
				data: dados,
				success: function(data){
          var HTML = '<tr>'
                  +'<th scope = "col" class="thRanking">Posição</th>'
                  +'<th scope = "col" class="thRanking">Jogador</th>'
                  +'<th scope = "col" class="thRanking">Apelido</th>'
                  +'<th scope = "col" class="thRanking">Clube</th>'
                  +'<th scope = "col" class="thRanking">Preço</th>'
                  +'<th scope = "col" class="thRanking">Pontuação</th>'
              +'</tr>';
          $("#thead").html(HTML);

          var gol = data.gol.indices;
          for(let i=0; i<gol.length;i++){
            for(let j=0; j<1;j++){
							var idJogador = gol[i][j];
							$.ajax({
      				      url: 'https://cartolatccapi.herokuapp.com/jogador',
      				      timeout: 3000,
      				      method: 'GET',
      				      dataType: 'json',
      				      data: {"id":idJogador},
        				success: function(dadosJogador){
                  ESCALACAO += '<tr><td>Goleiro</td><td>'+dadosJogador[2]+'</td><td>'+dadosJogador[4]+'</td><td></td><td>C$'+dadosJogador[11].toFixed(2)+'</td><td>'+dadosJogador[12].toFixed(2)+'</td></tr>';
									SOMAPONTUACAO += parseFloat(dadosJogador[12]);
									SOMAPRECO += parseFloat(dadosJogador[11]);
                }
              });
            }
          }

          var ata = data.ata.indices;
          for(let i=0; i<ata.length;i++){
            for(let j=0; j<3;j++){
							var idJogador = ata[i][j];
							$.ajax({
      				      url: 'https://cartolatccapi.herokuapp.com/jogador',
      				      timeout: 3000,
      				      method: 'GET',
      				      dataType: 'json',
      				      data: {"id":idJogador},
        				success: function(dadosJogador){
                  ESCALACAO += '<tr><td>atacante</td><td>'+dadosJogador[2]+'</td><td>'+dadosJogador[4]+'</td><td></td><td>C$'+dadosJogador[11].toFixed(2)+'</td><td>'+dadosJogador[12].toFixed(2)+'</td></tr>';
									SOMAPONTUACAO += parseFloat(dadosJogador[12]);
									SOMAPRECO += parseFloat(dadosJogador[11]);
                }
              });
            }
          }

          var lat = data.lat.indices;
          for(let i=0; i<lat.length;i++){
            for(let j=0; j<2;j++){
							var idJogador = lat[i][j];
							$.ajax({
      				      url: 'https://cartolatccapi.herokuapp.com/jogador',
      				      timeout: 3000,
      				      method: 'GET',
      				      dataType: 'json',
      				      data: {"id":idJogador},
        				success: function(dadosJogador){
                  ESCALACAO += '<tr><td>Lateral</td><td>'+dadosJogador[2]+'</td><td>'+dadosJogador[4]+'</td><td></td><td>C$'+dadosJogador[11].toFixed(2)+'</td><td>'+dadosJogador[12].toFixed(2)+'</td></tr>';
									SOMAPONTUACAO += parseFloat(dadosJogador[12]);
									SOMAPRECO += parseFloat(dadosJogador[11]);
                }
              });
            }
          }

          var mei = data.mei.indices;
          for(let i=0; i<mei.length;i++){
            for(let j=0; j<3;j++){
							var idJogador = mei[i][j];
							$.ajax({
      				      url: 'https://cartolatccapi.herokuapp.com/jogador',
      				      timeout: 3000,
      				      method: 'GET',
      				      dataType: 'json',
      				      data: {"id":idJogador},
        				success: function(dadosJogador){
                  ESCALACAO += '<tr><td>Meia</td><td>'+dadosJogador[2]+'</td><td>'+dadosJogador[4]+'</td><td></td><td>C$'+dadosJogador[11].toFixed(2)+'</td><td>'+dadosJogador[12].toFixed(2)+'</td></tr>';
									SOMAPONTUACAO += parseFloat(dadosJogador[12]);
									SOMAPRECO += parseFloat(dadosJogador[11]);
                }
              });
            }
          }

          var zag = data.zag.indices;
          for(let i=0; i<zag.length;i++){
            for(let j=0; j<2;j++){
							var idJogador = zag[i][j];
							$.ajax({
      				      url: 'https://cartolatccapi.herokuapp.com/jogador',
      				      timeout: 3000,
      				      method: 'GET',
      				      dataType: 'json',
      				      data: {"id":idJogador},
        				success: function(dadosJogador){
                  ESCALACAO += '<tr><td>Zagueiro</td><td>'+dadosJogador[2]+'</td><td>'+dadosJogador[4]+'</td><td></td><td>C$'+dadosJogador[11].toFixed(2)+'</td><td>'+dadosJogador[12].toFixed(2)+'</td></tr>';
									SOMAPONTUACAO += parseFloat(dadosJogador[12]);
									SOMAPRECO += parseFloat(dadosJogador[11]);
                }
              });
            }
          }

          var tec = data.tec.indices;
          for(let i=0; i<tec.length;i++){
            for(let j=0; j<1;j++){
							var idJogador = tec[i][j];
							$.ajax({
      				      url: 'https://cartolatccapi.herokuapp.com/jogador',
      				      timeout: 3000,
      				      method: 'GET',
      				      dataType: 'json',
      				      data: {"id":idJogador},
        				success: function(dadosJogador){
                  ESCALACAO += '<tr><td>Técnico</td><td>'+dadosJogador[2]+'</td><td>'+dadosJogador[4]+'</td><td>'+dadosJogador[16]+'</td><td>C$'+dadosJogador[11].toFixed(2)+'</td><td>'+dadosJogador[12].toFixed(2)+'</td></tr>';
									console.log(dadosJogador);

									SOMAPONTUACAO += parseFloat(dadosJogador[12]);
									SOMAPRECO += parseFloat(dadosJogador[11]);
									ESCALACAO += '<tr><td colspan="4"><b>Total</b></td><td>C$'+SOMAPRECO.toFixed(2)+'</td><td>'+SOMAPONTUACAO.toFixed(2)+'</td></tr>';
									$("#tbody").html(ESCALACAO);
                }
              });
            }
          }
				}
			});

    }
</script>
