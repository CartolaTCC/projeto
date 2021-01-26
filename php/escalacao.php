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
	<link rel="stylesheet" type="text/css" href="../css/cabecalho.css" />
	<link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>

  <!--cabeçalho-->
	<nav class="navbar navbar-expand-md cabecalho">
		<a class="navbar-brand ranking" href="#">Ranking</a>
		<a class="navbar-brand" href="home.php"><img src="../img/logo.jpg" class="cartola"/></a>
		<a class="navbar-brand linkEscalacao" href="escalacao.php">Escalação</a>
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
