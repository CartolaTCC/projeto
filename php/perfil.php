<!DOCTYPE html>
<html lang = "pt-BR">
<head>
	<title>Projeto - TCC</title>
	<link rel="shortcut icon" href="../img/logo.jpg" >
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/w3.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
	<link rel="stylesheet" type="text/css" href="../css/perfil.css" />
	<link rel="stylesheet" type="text/css" href="../css/cabecalho.css" />
	<script src='../js/jquery-3.5.1.min.js'></script>
	<script src="../js/bootstrap.min.js" ></script>
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

			<h1 class="text-center"><b>PERFIL</b></h1>

      <div id="usuario" class="container">
        <!--Dados do usuário-->
				<div class="row">
           <div class="col-2">
             <img src="../img/foto.png" class="foto"/>
           </div>
           <div class="col-3">
             <h1>Yuri Kanegae</h1>
             yurikanegae@gmail.com
           </div>
         </div>
      </div>

      <!-- Modal de edição de perfil-->
			<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	  Launch demo modal
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
  </main>
</body>
</html>
