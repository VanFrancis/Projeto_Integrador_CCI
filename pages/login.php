<?php session_start(); ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>CCI-ADM</title>
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="..\css\style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <!--login modal-->
    <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <img src="../img/Logo_X.png" class="col-lg-offset-4">
          </div>

          <div class="modal-body">
              <form class="form col-md-12 center-block" action="config/validacao.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control input-lg" name="usuario" placeholder="Usuário" oninput="setCustomValidity('')" 
							oninvalid="this.setCustomValidity('Preencha o campo USUÁRIO')" required />
                </div>
                <div class="form-group">
                  <input type="password" class="form-control input-lg" name="senha" placeholder="Senha" oninput="setCustomValidity('')" 
							oninvalid="this.setCustomValidity('Preencha o campo SENHA')" required />
                </div>
                <div class="form-group ">
                <strong><p class="text-center text-danger">
  								<?php
  									if(isset($_SESSION['loginErro'])){
  										echo $_SESSION['loginErro'];
  										unset($_SESSION['loginErro']);
  									}
  								?>
						    </p></strong>
                  
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                  <button class="btn btn-primary btn-lg btn-block">Entrar</button>
                </div>  
            </div>
          </form>
        </div>
      </div>
    </div>
      <!-- script references -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>