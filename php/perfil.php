<?php
	include "funcoesEstruturais.php";
	include "conexao.php";
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
<body>

  	<main>
		<h1 class="text-center pageTitle"><b>PERFIL</b></h1>

		<div id="dadosUsuarioPerfil" class="container">
			<!--Dados do usuário-->
			<div class="row ">
				<div class="col-2 offset-3">
					<img src="../img/foto.png" class="fotoPerfil" alt="foto de perfil"/>
				</div>

				<div class="col-3">

					<?php
							echo '<h1><b>"'.$_SESSION["Usuario"].'"</b></h1>';
						}
					?>

					yurikanegae@gmail.com
				</div>
				<div class="col-1">
					<div class="row">
						<!--Botão do modal editar perfil-->
						<button type="button" class="btn btnEditar" data-toggle="modal" data-target="#modalEditarPerfil">
							<img src="../img/editar.png" class="fotoPerfil" alt="editar perfil"/>
						</button>
					</div>
					<div class="row">
						<!--Botão do modal sincronizar com a conta Globo-->
						<button type="button" class="btn btnSinc" data-toggle="modal" data-target="#modalSincronizar">
							<img src="../img/sincronizar.png" class="fotoPerfil" alt="sincronizar com conta Globo"/>
						</button>
					</div>
				</div>
			</div>
		</div>

		<!--Segunda parte da página de perfil-->
			<div class="row titulosPerfil">
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
					    <tr class="cabecalhoTable">
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
					<img src="../img/grafico.jpg" class="perforIndi"/>
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
									<img src="../img/foto.png" class="editarFotoPerfil" alt="editar foto de perfil"><input type="file" name="fotoPerfil">
								</div>
								<div class="col">
									<div class="row">
										<label for="nomeUsuario" class="labelEditar">
											Nome:
										</label>
									</div>
									<div class="row">
										<input type="text" name="nomeUsuario" id="nomeUsuario" value="Yuri Kanegae"/>
									</div>
									<div class="row">
										<label for="emailUsuario" class="labelEditar">
											E-mail:
										</label>
									</div>
									<div class="row">
										<input type="email" name="emailUsuario" id="emailUsuario" value="yurikanegae@gmail.com"/>
									</div>
									<div class="row">
										<label for="senhaUsuario" class="labelEditar">
											Senha:
										</label>
									</div>
									<div class="row">
										<input type="password" name="senhaUsuario" id="senhaUsuario" value="*****"/>
									</div>
									<div class="row">
										<label for="confSenhalUsuario" class="labelEditar">
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
			        <button type="button" class="btn corBotao btnEditar">Salvar alterações</button>
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
									<label for="emailSinc" class="labelEditar">
										E-mail:
									</label>
								</div>
								<div class="col">
									<label for="senhaSinc" class="labelEditar">
										Senha:
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<input type="email" name="emailSinc" id="emailSinc" value="yurikanegae@gmail.com" />
								</div>
								<div class"col">
									<input type="password" name="senhaSinc" id="senhaSinc" value="*******" class="colunaModal"/>
								</div>
							</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn corBotao btnSinc">Sincronizar</button>
			      </div>
			    </div>
			  </div>
			</div>
  </main>

	<?php
		//Rodapé da página
	  rodape();
	?>
