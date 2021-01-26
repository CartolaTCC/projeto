<!DOCTYPE html>
<html lang  =  "pt-BR">
    <head>
    	<meta charset  =  "UTF-8" name  =  "viewport" content  =  "width=device-width, initial-scale=1">

        <link rel = "stylesheet" href = "../css/w3.css">
    	<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.min.css" />
    	<link rel = "stylesheet" type = "text/css" href = "../css/estilo.css" />

        <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel  =  "stylesheet"/>
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Raleway">
        <link rel = "shortcut icon" href = "../img/logo.jpg" >

    	<script src = '../js/jquery-3.5.1.min.js'></script>
    	<script src = "../js/bootstrap.min.js" ></script>

        <title>Projeto - TCC</title>

		<style>
			thead{
                background-color: #E67E22;
            }

            td{
                text-align: center;
            }
		</style>

        <script>
            function atualizaTabela(){
                var attack_scouts = document.getElementById('attack_scouts');
                var defense_scouts = document.getElementById('defense_scouts');

                attack_scouts = attack_scouts.checked;
                defense_scouts = defense_scouts.checked;

                console.log(attack_scouts, defense_scouts);

                if(attack_scouts && defense_scouts){
                    var HTML = '<tr>'
                            +'<th scope = "col">#</th>'
                            +'<th scope = "col">Jogador</th>'
                            +'<th scope = "col">Posição</th>'
                            +'<th scope = "col">Preço</th>'
                            +'<th scope = "col">Gol</th>'
                            +'<th scope = "col">Assistência</th>'
                            +'<th scope = "col">Finalização para Fora</th>'
                            +'<th scope = "col">Finalização na Trave</th>'
                            +'<th scope = "col">Falta sofrida</th>'
                            +'<th scope = "col">Defesa Difícil</th>'
                            +'<th scope = "col">Defesa de Pênalti</th>'
                            +'<th scope = "col">Desarme</th>'
                            +'<th scope = "col">Finalização Defendida</th>'
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
                            +'<th scope = "col">#</th>'
                            +'<th scope = "col">Jogador</th>'
                            +'<th scope = "col">Posição</th>'
                            +'<th scope = "col">Preço</th>'
                            +'<th scope = "col">Gol</th>'
                            +'<th scope = "col">Assistência</th>'
                            +'<th scope = "col">Finalização para Fora</th>'
                            +'<th scope = "col">Finalização na Trave</th>'
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
                        +'<tr><td>17</td><td>Rafinha</td> <td>lat</td> <td>10.18</td> <td>0</td> <td>0.263157894736842</td> <td>0.0526315789473684</td> <td>0</td>'
                        +'<tr><td>18</td><td>Fred</td> <td>ata</td> <td>5.66</td> <td>0.166666666666667</td> <td>0.1</td> <td>0.533333333333333</td> <td>0</td>'
                        +'<tr><td>19</td><td>Maicon</td> <td>mei</td> <td>8.09</td> <td>0.2</td> <td>0.2</td> <td>0.266666666666667</td> <td>0</td>';

                    $("#tbody").html(HTML);
                }else if(defense_scouts){
                    var HTML = '<tr>'
                            +'<th scope = "col">#</th>'
                            +'<th scope = "col">Jogador</th>'
                            +'<th scope = "col">Posição</th>'
                            +'<th scope = "col">Preço</th>'
                            +'<th scope = "col">Falta sofrida</th>'
                            +'<th scope = "col">Defesa Difícil</th>'
                            +'<th scope = "col">Defesa de Pênalti</th>'
                            +'<th scope = "col">Desarme</th>'
                            +'<th scope = "col">Finalização Defendida</th>'
                        +'</tr>';

                    $("#thead").html(HTML);

                    var HTML = '<tr><td>1</td><td>Maicon</td> <td>mei</td> <td>8.09</td> <td>0.866666666666667</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
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
                        +'<tr><td>18</td><td>Rafinha</td> <td>lat</td> <td>10.18</td> <td>0.842105263157895</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>'
                        +'<tr><td>19</td><td>Fred</td> <td>ata</td> <td>5.66</td> <td>136.666.666.666.667</td> <td>0</td> <td>0</td> <td>0</td> <td>0</td></tr>';

                    $("#tbody").html(HTML);
                }
            }
        </script>
    </head>

    <tr style = "background-color: #E67E22;">

    </tr>
    <body onload = "atualizaTabela()">
        <!--Cabeçalho-->
        <nav class="navbar navbar-expand-lg cabecalho">
    		<div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0" style="margin-left:22%;">
    			<ul class="navbar-nav ml-auto text-center">
    				<li class="nav-item active">
    					<a class="nav-link ranking" href="ranking.php">Ranking</a>
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
            <h1 class = "text-center">RANKING DOS JOGADORES</h1>

            <!--Tabela dos scouts-->
            <div class = "container">
                <table class = "table" >
                    <thead id = "thead"></thead>

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
    </body>
</html>