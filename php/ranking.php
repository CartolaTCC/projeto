<?php
	include "constSession.php";
	include "funcoesEstruturais.php";
	//Estrutura head
	head();

	//Se o usuário estiver logado
  if($_SESSION[SESSAO]==1){
  	//Cabeçalho da página para usuários logados
  	cabecalhoUsuarioLogado();
  }else{ //Se não estiver logado
    header('Location: index.php');
  }
?>

    <tr style = "background-color: #E67E22;">

    </tr>
    <body onload = "atualizaTabela()">
        <!--Escopo principal-->
        <main>
            <h1 class = "text-center pageTitle"><b>RANKING DOS JOGADORES</b></h1>

            <!--Tabela dos scouts-->
            <div class = "container">
                <table class = "tableRanking" >
                    <thead class = "cabecalhoTable" id = "thead"></thead>

                    <tbody id = "tbody">

                    </tbody>
                </table>
            </div>

            <!--Form de atualização-->
            <form onchange = "atualizaTabela()">
                <div class = "row">
                    <div class = "col-4 offset-2">
                        <input type = "checkbox" name = "attack_scouts" id = "attack_scouts" value = "attack" checked/>
                        <label for = "attack_scouts">Scouts de ataque</label>
                    </div>
                    <div class = "col-4" style = "text-align: right;">
                        <label for = "defense_scouts">Scouts de defesa</label>
                        <input type = "checkbox" name = "defense_scouts" id = "defense_scouts" value = "defense" checked/>
                    </div>
                </div>
            </form>
        </main>

<?php
	//Rodapé da página
  rodape();
?>

<script>
    function atualizaTabela(){
        var attack_scouts = document.getElementById('attack_scouts');
        var defense_scouts = document.getElementById('defense_scouts');

        attack_scouts = attack_scouts.checked;
        defense_scouts = defense_scouts.checked;

        console.log(attack_scouts, defense_scouts);

        if(attack_scouts && defense_scouts){
            var HTML = '<tr>'
                    +'<th scope = "col" class="thRanking">#</th>'
                    +'<th scope = "col" class="thRanking">Jogador</th>'
                    +'<th scope = "col" class="thRanking">Posição</th>'
                    +'<th scope = "col" class="thRanking">Preço</th>'
                    +'<th scope = "col" class="thRanking">Gol</th>'
                    +'<th scope = "col" class="thRanking">Assistência</th>'
                    +'<th scope = "col" class="thRanking">Finalização para Fora</th>'
                    +'<th scope = "col" class="thRanking">Finalização na Trave</th>'
                    +'<th scope = "col" class="thRanking">Falta sofrida</th>'
                    +'<th scope = "col" class="thRanking">Defesa Difícil</th>'
                    +'<th scope = "col" class="thRanking">Defesa de Pênalti</th>'
                    +'<th scope = "col" class="thRanking">Desarme</th>'
                    +'<th scope = "col" class="thRanking">Finalização Defendida</th>'
                +'</tr>';

            $("#thead").html(HTML);

            var HTML = '<tr><td>1</td><td>Paulo AndrǸ</td> <td>zag</td> <td>3.91</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>2</td><td>Evandro</td> <td>mei</td> <td>5.48</td> <td>0.0555555555555556</td> <td>0.277777777777778</td> <td>0.277777777777778</td> <td>0</td> <td>172.222.222.222.222</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>3</td><td>Betǜo</td> <td>zag</td> <td>3.97</td> <td>0</td> <td>0</td> <td>0.107142857142857</td> <td>0</td> <td>1</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>4</td><td>Rafael Moura</td> <td>ata</td> <td>7.86</td> <td>0.409090909090909</td> <td>0.0454545454545455</td> <td>1</td> <td>0</td> <td>118.181.818.181.818</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>5</td><td>Fǭbio</td> <td>gol</td> <td>10.35</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>0.142857142857143</td> <td>125.714.285.714.286</td> <td>0.0571428571428571</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>6</td><td>Edu Dracena</td> <td>zag</td> <td>5.61</td> <td>0</td> <td>0</td> <td>0.8</td> <td>0</td> <td>0.6</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>7</td><td>Jonathan</td> <td>lat</td> <td>6.24</td> <td>0.142857142857143</td> <td>0</td> <td>0</td> <td>0</td> <td>0.571428571428571</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>8</td><td>Alecsandro</td> <td>ata</td> <td>4.54</td> <td>0.1</td> <td>0</td> <td>0.55</td> <td>0</td> <td>0.55</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>9</td><td>Cǰcero</td> <td>mei</td> <td>10.58</td> <td>0.09375</td> <td>0.03125</td> <td>0.34375</td> <td>0</td> <td>18.125</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>10</td><td>Henrique</td> <td>mei</td> <td>8.38</td> <td>0</td> <td>0</td> <td>0.484848484848485</td> <td>0</td> <td>212.121.212.121.212</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>11</td><td>LǸo Moura</td> <td>lat</td> <td>6.45</td> <td>0</td> <td>0.0555555555555556</td> <td>0.111111111111111</td> <td>0</td> <td>0.777777777777778</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>12</td><td>Marcelo Boeck</td> <td>gol</td> <td>4.9</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>0.125</td> <td>1.875</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>13</td><td>Edinho</td> <td>mei</td> <td>1.89</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>1</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>14</td><td>Rafael Sobis</td> <td>ata</td> <td>6.51</td> <td>0.105263157894737</td> <td>0.157894736842105</td> <td>0.894736842105263</td> <td>0</td> <td>0.578947368421053</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>15</td><td>Anderson</td> <td>gol</td> <td>2.08</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>1</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>16</td><td>Fernando Prass</td> <td>gol</td> <td>6.94</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>1</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>17</td><td>Rafinha</td> <td>lat</td> <td>10.18</td> <td>0</td> <td>0.263157894736842</td> <td>0.0526315789473684</td> <td>0</td> <td>0.842105263157895</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>18</td><td>Fred</td> <td>ata</td> <td>5.66</td> <td>0.166666666666667</td> <td>0.1</td> <td>0.533333333333333</td> <td>0</td> <td>136.666.666.666.667</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
+'<tr><td>19</td><td>Maicon</td> <td>mei</td> <td>8.09</td> <td>0.2</td> <td>0.2</td> <td>0.266666666666667</td> <td>0</td> <td>0.866666666666667</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>';

            $("#tbody").html(HTML);
        }else if(attack_scouts){
            var HTML = '<tr>'
                    +'<th scope = "col" class="thRanking">#</th>'
                    +'<th scope = "col" class="thRanking">Jogador</th>'
                    +'<th scope = "col" class="thRanking">Posição</th>'
                    +'<th scope = "col" class="thRanking">Preço</th>'
                    +'<th scope = "col" class="thRanking">Gol</th>'
                    +'<th scope = "col" class="thRanking">Assistência</th>'
                    +'<th scope = "col" class="thRanking">Finalização para Fora</th>'
                    +'<th scope = "col" class="thRanking">Finalização na Trave</th>'
                +'</tr>';

            $("#thead").html(HTML);

            var HTML = '<tr><td>1</td><td>Paulo AndrǸ</td> <td>zag</td> <td>3.91</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td>'
                +'<tr><td>2</td><td>Evandro</td> <td>mei</td> <td>5.48</td> <td>0.0555555555555556</td> <td>0.277777777777778</td> <td>0.277777777777778</td> <td>0</td>'
                +'<tr><td>3</td><td>Betǜo</td> <td>zag</td> <td>3.97</td> <td>0</td> <td>0</td> <td>0.107142857142857</td> <td>0</td>'
                +'<tr><td>4</td><td>Rafael Moura</td> <td>ata</td> <td>7.86</td> <td>0.409090909090909</td> <td>0.0454545454545455</td> <td>1</td> <td>0</td>'
                +'<tr><td>5</td><td>Fǭbio</td> <td>gol</td> <td>10.35</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td>'
                +'<tr><td>6</td><td>Edu Dracena</td> <td>zag</td> <td>5.61</td> <td>0</td> <td>0</td> <td>0.8</td> <td>0</td>'
                +'<tr><td>7</td><td>Jonathan</td> <td>lat</td> <td>6.24</td> <td>0.142857142857143</td> <td>0</td> <td>0</td> <td>0</td>'
                +'<tr><td>8</td><td>Alecsandro</td> <td>ata</td> <td>4.54</td> <td>0.1</td> <td>0</td> <td>0.55</td> <td>0</td>'
                +'<tr><td>9</td><td>Cǰcero</td> <td>mei</td> <td>10.58</td> <td>0.09375</td> <td>0.03125</td> <td>0.34375</td> <td>0</td>'
                +'<tr><td>10</td><td>Henrique</td> <td>mei</td> <td>8.38</td> <td>0</td> <td>0</td> <td>0.484848484848485</td> <td>0</td>'
                +'<tr><td>11</td><td>LǸo Moura</td> <td>lat</td> <td>6.45</td> <td>0</td> <td>0.0555555555555556</td> <td>0.111111111111111</td> <td>0</td>'
                +'<tr><td>12</td><td>Marcelo Boeck</td> <td>gol</td> <td>4.9</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td>'
                +'<tr><td>13</td><td>Edinho</td> <td>mei</td> <td>1.89</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td>'
                +'<tr><td>14</td><td>Rafael Sobis</td> <td>ata</td> <td>6.51</td> <td>0.105263157894737</td> <td>0.157894736842105</td> <td>0.894736842105263</td> <td>0</td>'
                +'<tr><td>15</td><td>Anderson</td> <td>gol</td> <td>2.08</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td>'
                +'<tr><td>16</td><td>Fernando Prass</td> <td>gol</td> <td>6.94</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td>'
                +'<tr><td>17</td><td>Rafinha</td> <td>lat</td> <td>10.18</td> <td>0</td> <td>0.26</td> <td>0.05</td> <td>0</td>'
                +'<tr><td>18</td><td>Fred</td> <td>ata</td> <td>5.66</td> <td>0.17</td> <td>0.1</td> <td>0.53</td> <td>0</td>'
                +'<tr><td>19</td><td>Maicon</td> <td>mei</td> <td>8.09</td> <td>0.2</td> <td>0.2</td> <td>0.27</td> <td>0</td>';

            $("#tbody").html(HTML);
        }else if(defense_scouts){
            var HTML = '<tr>'
                    +'<th scope = "col" class="thRanking">#</th>'
                    +'<th scope = "col" class="thRanking">Jogador</th>'
                    +'<th scope = "col" class="thRanking">Posição</th>'
                    +'<th scope = "col" class="thRanking">Preço</th>'
                    +'<th scope = "col" class="thRanking">Falta sofrida</th>'
                    +'<th scope = "col" class="thRanking">Defesa Difícil</th>'
                    +'<th scope = "col" class="thRanking">Defesa de Pênalti</th>'
                    +'<th scope = "col" class="thRanking">Desarme</th>'
                    +'<th scope = "col" class="thRanking">Finalização Defendida</th>'
                +'</tr>';

            $("#thead").html(HTML);

            var HTML = '<tr><td>1</td><td>Maicon</td> <td>mei</td> <td>8.09</td> <td>0.87</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>2</td><td>Paulo AndrǸ</td> <td>zag</td> <td>3.91</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>3</td><td>Evandro</td> <td>mei</td> <td>5.48</td> <td>172.222.222.222.222</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>4</td><td>Betǜo</td> <td>zag</td> <td>3.97</td> <td>1</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>5</td><td>Rafael Moura</td> <td>ata</td> <td>7.86</td> <td>118.181.818.181.818</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>6</td><td>Fǭbio</td> <td>gol</td> <td>10.35</td> <td>0.142857142857143</td> <td>125.714.285.714.286</td> <td>0.0571428571428571</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>7</td><td>Edu Dracena</td> <td>zag</td> <td>5.61</td> <td>0.6</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>8</td><td>Jonathan</td> <td>lat</td> <td>6.24</td> <td>0.571428571428571</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>9</td><td>Alecsandro</td> <td>ata</td> <td>4.54</td> <td>0.55</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>10</td><td>Cǰcero</td> <td>mei</td> <td>10.58</td> <td>18.125</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>11</td><td>Henrique</td> <td>mei</td> <td>8.38</td> <td>212.121.212.121.212</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>12</td><td>LǸo Moura</td> <td>lat</td> <td>6.45</td> <td>0.777777777777778</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>13</td><td>Marcelo Boeck</td> <td>gol</td> <td>4.9</td> <td>0.125</td> <td>1.875</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>14</td><td>Edinho</td> <td>mei</td> <td>1.89</td> <td>1</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>15</td><td>Rafael Sobis</td> <td>ata</td> <td>6.51</td> <td>0.578947368421053</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>16</td><td>Anderson</td> <td>gol</td> <td>2.08</td> <td>0</td> <td>1</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>17</td><td>Fernando Prass</td> <td>gol</td> <td>6.94</td> <td>0</td> <td>1</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>18</td><td>Rafinha</td> <td>lat</td> <td>10.18</td> <td>0.84</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                +'<tr><td>19</td><td>Fred</td> <td>ata</td> <td>5.66</td> <td>136.666.666.666.667</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>';

            $("#tbody").html(HTML);
        }
    }
</script>
