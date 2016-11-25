<?php session_start(); ?>
  <?php
  $query = "SELECT nome, cpf FROM tb_idoso  WHERE nome='".$_GET['buscar']."'";
  if(!empty($_GET["cpf"])){
  	$query .= " OR nome LIKE '%".$_GET['nome']."%'";
}

?>
<html>
  <head>
    <?php include('config/head.php'); ?>
  </head>
  
  <body>
    <?php include('config/menu.php'); ?>
    <div class="section">
      
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Buscar Cadastro</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-3 col-md-6">
            <form role="form">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" id="nome" name="buscar" <?PHP if(!empty($_GET["buscar"])) { echo ' value="'.$_GET["buscar"].'"'; } ?>  placeholder="Entre com o Nome ou CPF">
                  <span class="input-group-btn">
                    <a class="btn btn-primary" type="submit">Buscar</a>
                  </span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table table table-hover table-condensed table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Data de Nascimento</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>José Barreto da Silva</td>
                  <td>125632154-63</td>
                  <td>31/10/1932</td>
                  <td>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".modal-confirmar" href="#?id=<?=($array['id_atividade']);?>" aria-label="Left Align">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirmar</button> 
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
     <?php include('config/rodape.php'); ?>
    <!-- Modal Excluir -->
    <div class="modal fade modal-confirmar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Confirmar Frenquência</h3>
        </div>
        <div class="modal-body">
          <form role="form" action="#" method="POST">
          	<div class="form-group">
      				<label>Selecione uma Oficina</label>
              <select class="form-control" required="">
                <option value="" selected="true" disabled="disabled">Selecione...</option>
                <option value="feminino">Hidorginástica</option>
                <option value="masculino">Jogos de Mesa</option>
              </select>
    			  </div>
          </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" name="descricao">Salvar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
   
  </body>
   <?php include('config/scripts.php'); ?>
</html>
