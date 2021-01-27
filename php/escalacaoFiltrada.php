<!DOCTYPE html>
<html lang = "pt-BR">
<head>
	<meta charset  =  "UTF-8" name  =  "viewport" content  =  "width=device-width, initial-scale=1">

	<link rel = "stylesheet" href = "../css/w3.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.min.css" />
	<link rel = "stylesheet" type = "text/css" href = "../css/estilo.css" />
	<link rel="stylesheet" type="text/css" href="../css/escalacao.css" />

	<link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel  =  "stylesheet"/>
	<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Raleway">
	<link rel = "shortcut icon" href = "../img/logo.png" >

	<script src = '../js/jquery-3.5.1.min.js'></script>
	<script src = "../js/bootstrap.min.js" ></script>
	<script src = "../js/popper.min.js"></script>

	<title>Projeto - TCC</title>
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
				<form id="filtrar_escalacao" action="escalacao.php" method="POST">
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
