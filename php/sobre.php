<!DOCTYPE html>
<html lang  =  "pt-BR">
    <head>
    	<meta charset  =  "UTF-8" name  =  "viewport" content  =  "width=device-width, initial-scale=1">

        <link rel = "stylesheet" href = "../css/w3.css">
    	<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.min.css" />
    	<link rel = "stylesheet" type = "text/css" href = "../css/estilo.css" />

        <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel  =  "stylesheet"/>
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Raleway">
        <link rel = "shortcut icon" href = "../img/logo.png" >

    	<script src = '../js/jquery-3.5.1.min.js'></script>
    	<script src = "../js/bootstrap.min.js" ></script>
        <script src = "../js/popper.min.js"></script>


        <title>Projeto - TCC</title>

        <style>
            #sticky-footer {
              flex-shrink: none;
            }
        </style>
    </head>
    <body>
        <!--Cabeçalho-->
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: #E67E22; font-size: 20px; font-weight: bold;">

            <!--Primeiro item da ordem - necessário para o nav ficar formatado-->
            <div class = "navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2"></div>

            <!--Segundo item da ordem - Elementos que estão no meio-->
            <div class = "mx-auto order-0">

                <!--Elementos centrais-->
                <ul class = "navbar-nav ml-auto">
                    <li class = "nav-item">
                        <a class = "navbar-brand mx-auto" href = "index.php">
                            <img src = "../img/logo.png" alt = "home" style = "width: 50px;"/>
                        </a>
                    </li>
                </ul>

                <!--Botão para expandir os itens-->
                <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = ".dual-collapse2">
                    <span class = "navbar-toggler-icon"></span>
                </button>
            </div>

            <!--Terceiro item da ordem - Elementos que estão a direita-->
            <div class = "navbar-collapse collapse w-100 order-3 dual-collapse2"></div>
        </nav>

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

        <!--Footer-->
    	<footer id = "sticky-footer" class = "py-4">
            <hr/>
    		<p class = "text-center">Precisa de ajuda? leia nossa <a href = "sobre.php">documentação</a> ou entre em contato com os desenvolvedores através de um desses e-mails:</p>

    		<p class = "text-center">Amanda Ancelmo: amandabolattoancelmo@gmail.com</p>
    		<p class = "text-center">Renan Martins: renan2204@outlook.com</p>
    		<p class = "text-center">Yuri Kanegae: yurikanegae@gmail.com</p>
    	</footer>
    </body>
</html>
