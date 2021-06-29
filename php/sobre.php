<?php
	include "funcoesEstruturais.php";
	//Estrutura head
	head();
?>
  <body>
      <main>
          <h1 class = "text-center pageTitle"><b>Sobre o projeto!</b></h1>

          <div class = "container">
              <p class = "text-center">
                  <img src = "../img/mapa.jpg" alt = "Mapa do site">
              </p>

              <div class = "col-8 offset-2">
                  <h3>Login e Cadastro:</h3>
                  <p style = "text-indent: 50px;font-size: 20px;">Antes de realizar qualquer tipo de atividade dentro da plataforma é necessário ter uma conta registrada com alguns dados essenciais para conseguirmos identificar você como um usuário, como e-mail, nome de usuário e senha. Após já ser cadastrado na plataforma é necessário conectar-se na mesma com seus dados de usuário como e-mail e senha.</p>

                  <h3>Home:</h3>
                  <p style = "text-indent: 50px;font-size: 20px;">Na home será apresentado os resultados das rodadas anteriores do campeonato brasileiro de futebol para informar ao usuário resultados que possam vir a interferir em jogos futuros, como fator emocional ou até mesmo tático.</p>

                  <h3>Ranking:</h3>
                  <p style = "text-indent: 50px;font-size: 20px;">O ranking contará com a ordem decrescente de melhores jogadores de acordo com sua posição baseada no acúmulo de scouts positivos e pontuação total. Também possuirá um filtro de scouts para saber unicamente os melhores jogadores em cada categoria de habilidade.</p>

                  <h3>Escalação:</h3>
                  <p style = "text-indent: 50px;font-size: 20px;">A página de escalação contará com a ferramenta de escolha de tática e através disso será dada de forma automatizada e predefinida por filtros do usuário a melhor escalação</p>

                  <h3>Perfil:</h3>
                  <p style = "text-indent: 50px;font-size: 20px;">Contará com os dados pessoais do usuário e seu ranking de pontuações recentes para melhor análise gráfica. Também contará com a sessão para edição de dados pessoais com confirmação via e-mail e possibilidade de conexão com a conta da Globo para melhor sincronia com o aplicativo do Cartola FC.</p>
              </div>
          </div>
      </main>
    </body>
<?php
  rodape();
?>
