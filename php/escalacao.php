<!DOCTYPE html>
<html lang = "pt-BR">
<head>
	<title>Projeto - TCC</title>
	<link rel="shortcut icon" href="../img/logo.jpg" >
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/w3.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
	<link rel="stylesheet" type="text/css" href="../css/escalacao.css" />
	<script src='../js/jquery-3.5.1.min.js'></script>
	<script src="../js/bootstrap.min.js" ></script>
	<link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>

	<!--cabeçalho-->
	<nav class="navbar navbar-expand-lg cabecalho">
		<div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0" style="margin-left:22%;">
			<ul class="navbar-nav ml-auto text-center">
				<li class="nav-item active">
					<a class="nav-link ranking" href="#">Ranking</a>
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

			<div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
				<div class="dropdown">
				  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<a class="mx-auto" href="#"><img src="../img/engrenagem.png" class="cartola" alt="home" style="width: 40%;"/></a>
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="perfil.php"><img src="../img/foto.png" alt="meu perfil" style="width: 30%;"/>Meu perfil</a>
				    <a class="dropdown-item" href="index.php"><img src="../img/exit.png" alt="sair" style="width: 30%;"/>Sair</a>
				  </div>
				</div>
			</div>
    </nav>

  <main>
			<h1 class="text-center"><b>ESCALAÇÃO AUTOMÁTICA</b></h1>

      <div id="form_filtro" class="container">
				<form id="filtrar_escalacao" action="escalacaoFiltrada.php" method="POST">
	          <table class="filtro">
	            <thead>
	              <tr>
	                <div class="row">
	                  <div class="col-sm-12">
	                    <div class="form-group">
	                      <td>
	                        <label for="saldo">Saldo disponível</label>
	                      </td>
	                      <td>
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
	                      <td>
	                        <input type="number" class="form-control" name="saldo" id="saldo"/>
	                      </td>
	                      <td>
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
	                <td colspan="2">
	                  <button type="submit" class="btn btn-custom"><b>Gerar escalação</b></button>
	                </td>
	              </tr>
	            </tbody>
	          </table>
	        </form>
      </div>

      <div id="escalacao" class="container escalacao">
        <!--Escalação-->
				<table class="table table-hover">
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
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
             <tr>
               <div class="row">
                 <td>
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
             <tr>
               <div class="row">
                 <td>
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
             <tr>
               <div class="row">
                 <td>
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
             <tr>
               <div class="row">
                 <td>
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
             <tr>
               <div class="row">
                 <td>
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
             <tr>
               <div class="row">
                 <td>
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
             <tr>
               <div class="row">
                 <td>
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
             <tr>
               <div class="row">
                 <td>
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
             <tr>
               <div class="row">
                 <td>
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
             <tr>
               <div class="row">
                 <td>
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
             <tr>
               <div class="row">
                 <td>
                   -
                 </td>
                 <td>
                   -
                 </td>
                 <td>
                   C$0.00
                 </td>
               </div>
             </tr>
           </tbody>
         </div>
       </table>
      </div>
  </main>
</body>
</html>
