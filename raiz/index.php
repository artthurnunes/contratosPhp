<?php
//include("conexaoMySQL.php"); //conexao MySQL
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Sistema de contratos HES</title>
	<!--<link rel="shortcut icon" href="img/comprimido.png"> ADICIONAR ICONE NA ABA DO NAVEGADOR-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Não armazena cache -->
	<meta http-equiv="cache-control" content="no-store, no-cache, must-revalidate, Post-Check=0, Pre-Check=0"> 
	<meta HTTP-EQUIV="Pragma" CONTENT="no-cache"> 
	<meta HTTP-EQUIV="Expires" CONTENT="-1">
		
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
	
  </head>
  <body>
     
      <div class="container">
          <div class="row" id="">
            <div class="col-md-12" id="">
                <br><br><br><br><br>
            </div>
          </div>
          <div class="row" id="">
              <div class="col-md-6 col-md-offset-3" id="">
                  <center><img src="img/logo.png"></center>
              </div>
          </div>
          <div class="row" id="">
              <div class="col-md-6 col-md-offset-3" id="">
                  <center><h3>Sistema de controle de contratos HES</h3></center>
              </div>
          </div>
          <div class="row" id="">
              <div class="col-md-4 col-md-offset-4" id="">
                <input type="text" id="user" class="form-control" placeholder="Digite seu usuário de acesso" required autofocus>
              </div>
          </div>
          <form method="" action="paginaPrincipal.php">
          <div class="row" id="">
              <div class="col-md-4 col-md-offset-4" id="">
                <input type="text" id="pass" class="form-control" placeholder="Digite sua senha de acesso" required autofocus>
              </div>
          </div>
          <div class="row" id="">
              <div class="col-md-4 col-md-offset-4" id="">
                <br>  
                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
              </div>
          </div>      
      </div><!--div do container da página -->
      
      
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
  </body>
</html>


