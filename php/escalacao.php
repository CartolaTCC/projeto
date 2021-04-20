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

			<h1 class = "text-center pageTitle"><b>ESCALAÇÃO AUTOMÁTICA</b></h1>
			<div id="form_filtro" class="container">
				<form id="filtrar_escalacao" action="escalacao.php" method="POST">
					<table class="tableEscalacao">
						<thead>
							<tr>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<td class="tdEscalacao">
												<label for="saldo">Saldo disponível</label>
											</td>
											<td class="tdEscalacao">
												<label for="esquemaTatico">Esquema tático</label>
											</td>
										</div>
									</div>
								</div>
							</tr>
						</thead>
						<tbody>
							<tr>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<td class="tdEscalacao">
												<input type="number" class="form-control" name="saldo" id="saldo"/>
											</td>
											<td class="tdEscalacao">
												<select name="esquemaTatico" class="form-control">
													<option value="">Selecione um esquema</option>
													<option value="3-4-3">3-4-3</option>
													<option value="3-5-2">3-5-2</option>
													<option value="4-3-3">4-3-3</option>
													<option value="4-4-2">4-4-2</option>
													<option value="4-5-1">4-5-1</option>
													<option value="5-3-2">5-3-2</option>
													<option value="5-4-1">5-4-1</option>
												</select>
											</td>
										</div>
									</div>
								</div>
							</tr>
							<tr>
								<td colspan="2" class="tdEscalacao">
									<button type="submit" class="btn corBotao"><b>Gerar escalação</b></button>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>

<?php
	if(empty($_POST['saldo']) && empty($_POST['esquemaTatico'])){
?>

<div id="escalacao" class="container escalacao">
	<!--Escalação-->
	<table class="table table-hover tableEscalacao">
		<div class="form-group">
			<thead>
				<tr>
					<div class="row">
						<th>
							Posição
						</th>
						<th>
							 Jogador
						 </th>
						 <th>
							 Cartoletas
						 </th>
					 </div>
				 </tr>
			 </thead>
			 <tbody>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
				 <tr>
					 <div class="row">
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 -
						 </td>
						 <td class="tdEscalacao">
							 C$0.00
						 </td>
					 </div>
				 </tr>
			 </tbody>
		 </div>
	 </table>
	</div>


<?php
}else{
?>

<!--Escalação filtrada hipotéticamente-->
<div id="escalacao" class="container escalacao">
	<!--Escalação-->
	<table class="table table-hover tableEscalacao">
	 <div class="form-group">
		 <thead>
			 <tr>
				 <div class="row">
					 <th>
						 Posição
					 </th>
					 <th>
						 Jogador
					 </th>
					 <th>
						 Cartoletas
					 </th>
				 </div>
			 </tr>
		 </thead>
		 <tbody>
			 <tr>
				 <div class="row">
					 <td>
						 GOL
					 </td>
					 <td>
						 A
					 </td>
					 <td>
						 C$23.00
					 </td>
				 </div>
			 </tr>
			 <tr>
				 <div class="row">
					 <td>
						 LAT
					 </td>
					 <td>
						 B
					 </td>
					 <td>
						 C$15.00
					 </td>
				 </div>
			 </tr>
			 <tr>
				 <div class="row">
					 <td>
						 LAT
					 </td>
					 <td>
						 C
					 </td>
					 <td>
						 C$8.00
					 </td>
				 </div>
			 </tr>
			 <tr>
				 <div class="row">
					 <td>
						 ZAG
					 </td>
					 <td>
						 D
					 </td>
					 <td>
						 C$15.00
					 </td>
				 </div>
			 </tr>
			 <tr>
				 <div class="row">
					 <td>
						 ZAG
					 </td>
					 <td>
						 E
					 </td>
					 <td>
						 C$11.00
					 </td>
				 </div>
			 </tr>
			 <tr>
				 <div class="row">
					 <td>
						 MEI
					 </td>
					 <td>
						 F
					 </td>
					 <td>
						 C$6.00
					 </td>
				 </div>
			 </tr>
			 <tr>
				 <div class="row">
					 <td>
						 MEI
					 </td>
					 <td>
						 G
					 </td>
					 <td>
						 C$4.00
					 </td>
				 </div>
			 </tr>
			 <tr>
				 <div class="row">
					 <td>
						 MEI
					 </td>
					 <td>
						 H
					 </td>
					 <td>
						 C$5.00
					 </td>
				 </div>
			 </tr>
			 <tr>
				 <div class="row">
					 <td>
						 ATA
					 </td>
					 <td>
						 I
					 </td>
					 <td>
						 C$3.00
					 </td>
				 </div>
			 </tr>
			 <tr>
				 <div class="row">
					 <td>
						 ATA
					 </td>
					 <td>
						 J
					 </td>
					 <td>
						 C$7.00
					 </td>
				 </div>
			 </tr>
			 <tr>
				 <div class="row">
					 <td>
						 ATA
					 </td>
					 <td>
						 K
					 </td>
					 <td>
						 C$3.00
					 </td>
				 </div>
			 </tr>
			 <tr>
				 <div class="row">
					 <td>
						 TEC
					 </td>
					 <td>
						 L
					 </td>
					 <td>
						 C$2.00
					 </td>
				 </div>
			 </tr>
		 </tbody>
	 </div>
 </table>
</div>

<?php
}

	//rodapé da página
	rodape();
?>
