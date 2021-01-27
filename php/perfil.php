<!DOCTYPE html>
<html lang = "pt-BR">
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
		h1{
		  padding-top: 1%;
		}

		.foto{
		  width: 90%;
		  margin-top: -15%;
		}

		.editarFoto{
		  width: 100%;
		  margin-top: 6%;
		  margin-left: 10%;
		}

		#usuario{
		    border-bottom: 1px solid black;
		    padding-bottom: 2%;
		}

		.btnEditar{
		  margin-left: -7%;
		  margin-top: 1%;
		}

		label, .rankingGeral, .grafico{
		  margin-top: 2%;
		}

		.btn-custom{
		    background-color: #E67E22;
		}

		.btnSinc{
		  margin-left: -15%;
		  margin-top: 1%;
		}

		.coluna, .grafico{
		  margin-left: 5%;
		}

		.rankingGeral{
		  margin-left: 16%;
		  width: 75%;
		}

		.grafico{
		  width: 80%;
		}

		.titulos{
		  margin-left: 18%;
		  margin-top: 1%;
		}
	</style>
</head>
<body>
    <!--Cabeçalho-->
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: #E67E22; font-size: 20px; font-weight: bold;">

        <!--Primeiro item da ordem - necessário para o nav ficar formatado-->
        <div class = "navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2"></div>

        <!--Segundo item da ordem - Elementos que estão no meio-->
        <div class="mx-auto order-0">

            <!--Elementos centrais-->
            <ul class = "navbar-nav ml-auto">
                <li class = "nav-item">
                    <a class = "nav-link" href = "ranking.php">Ranking</a>
                </li>

                <li class = "nav-item">
                    <a class = "navbar-brand mx-auto" href = "home.php">
                        <img src = "../img/logo.png" alt = "home" style = "width: 50px;"/>
                    </a>
                </li>

                <li class = "nav-item">
                    <a class = "nav-link" href = "escalacao.php">Escalação</a>
                </li>
            </ul>

            <!--Botão para expandir os itens-->
            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = ".dual-collapse2">
                <span class = "navbar-toggler-icon"></span>
            </button>
        </div>

        <!--Terceiro item da ordem - Elementos que estão a direita-->
        <div class = "navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class = "navbar-nav ml-auto">
                <li class = "nav-item">
                    <div class = "dropdown">
                        <button class = "btn dropdown-toggle" type = "button" id = "dropdownMenuButton" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                            <a class = "mx-auto" href = "#"><img src="../img/engrenagem.png" class = "cartola" alt = "home" style="width: 40px;"/></a>
                        </button>
                        <div class = "dropdown-menu dropdown-menu-right" aria-labelledby = "dropdownMenuButton">
                            <a class = "dropdown-item" href = "perfil.php"><img src = "../img/foto.png" alt = "meu perfil" style = "width: 30px;"/>Meu perfil</a>
                            <a class = "dropdown-item" href = "index.php"><img src = "../img/exit.png" alt = "sair" style = "width: 30px;"/>Sair</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


  	<main>
		<h1 class="text-center pageTitle"><b>PERFIL</b></h1>

		<div id="usuario" class="container">
			<!--Dados do usuário-->
			<div class="row ">
				<div class="col-2 offset-3">
					<img src="../img/foto.png" class="foto" alt="foto de perfil"/>
				</div>

				<div class="col-3">
					<h1><b>Yuri Kanegae</b></h1>
					yurikanegae@gmail.com
				</div>
				<div class="col-1">
					<div class="row">
						<!--Botão do modal editar perfil-->
						<button type="button" class="btn btnEditar" data-toggle="modal" data-target="#modalEditarPerfil">
							<img src="../img/editar.png" class="foto" alt="editar perfil"/>
						</button>
					</div>
					<div class="row">
						<!--Botão do modal sincronizar com a conta Globo-->
						<button type="button" class="btn btnSinc" data-toggle="modal" data-target="#modalSincronizar">
							<img src="../img/sincronizar.png" class="foto" alt="sincronizar com conta Globo"/>
						</button>
					</div>
				</div>
			</div>
		</div>

			<div class="row titulos">
				<div class="col">
					<h2><b>Ranking Geral</b></h2>
				</div>
				<div class="col">
					<h2><b>Performance individual</b></h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table table-striped rankingGeral">
					  <thead>
					    <tr class="btn-custom">
					      <th scope="col">Posição</th>
					      <th scope="col">Cartoleiro</th>
					      <th scope="col">Equipe</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1º</th>
					      <td>Renan Dias</td>
					      <td>RenanFC</td>
					    </tr>
					    <tr>
					      <th scope="row">2º</th>
					      <td>Yuri Kanegae</td>
					      <td>YuriFC</td>
					    </tr>
					    <tr>
					      <th scope="row">3º</th>
					      <td>Amanda Ancelmo</td>
					      <td>AmandaFC</td>
					    </tr>
					  </tbody>
					</table>
				</div>

				<div class="col">
					<img src="../img/grafico.jpg" class="grafico"/>
				</div>
			</div>

      <!-- Modal de edição de perfil-->
			<div class="modal fade" id="modalEditarPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Editar dados de perfil</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
							<div class="row">
								<div class="col-6">
									<img src="../img/editarFoto.jpg" class="editarFoto" alt="editar foto de perfil">
								</div>
								<div class="col">
									<div class="row">
										<label for="nomeUsuario">
											Nome:
										</label>
									</div>
									<div class="row">
										<input type="text" name="nomeUsuario" id="nomeUsuario" value="Yuri Kanegae"/>
									</div>
									<div class="row">
										<label for="emailUsuario">
											E-mail:
										</label>
									</div>
									<div class="row">
										<input type="email" name="emailUsuario" id="emailUsuario" value="yurikanegae@gmail.com"/>
									</div>
									<div class="row">
										<label for="senhaUsuario">
											Senha:
										</label>
									</div>
									<div class="row">
										<input type="password" name="senhaUsuario" id="senhaUsuario" value="*****"/>
									</div>
									<div class="row">
										<label for="confSenhalUsuario">
											Confirmar senha:
										</label>
									</div>
									<div class="row">
										<input type="password" name="confSenhaUsuario" id="confSenhalUsuario" value="*****"/>
									</div>
								</div>
							</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			        <button type="button" class="btn btn-custom">Salvar alterações</button>
			      </div>
			    </div>
			  </div>
			</div>

			<!--Modal sincronizar com a conta globo-->
			<div class="modal fade" id="modalSincronizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Sincronizar com conta Globo</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
							<div class="row">
								<div class="col-6">
									<label for="emailSinc">
										E-mail:
									</label>
								</div>
								<div class="col">
									<label for="senhaSinc">
										Senha:
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<input type="email" name="emailSinc" id="emailSinc" value="yurikanegae@gmail.com" />
								</div>
								<div class"col">
									<input type="password" name="senhaSinc" id="senhaSinc" value="*******"class="coluna"/>
								</div>
							</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			        <button type="button" class="btn btn-custom">Sincronizar</button>
			      </div>
			    </div>
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
