<?php 
	require'config/conexao.php';
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
        <div class="col-md-6">
          <h1>Lista de Oficinas</h1>
        </div>
      </div>
    </div>
    </div>
    
      <div class="row">
    <div class="section">
      <div class="container">
          <div class="col-md-12">
            <table class="table table table-hover table-condensed table-bordered">
            <thead>
              <tr class="text-center">
                <th class="text-center">Atividades</th>
                <th class="text-center">Data Início - Data Fim</th>
                <th class="text-center">Horário</th>
                <th class="text-center">Dia da Semana</th>
                <th class="text-center">Descrição</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php 
      						$query = mysql_query("SELECT * FROM tb_atividade WHERE tipo_atividade='Oficina' ORDER BY data_inicio ASC") or die (mysql_error());
      							while ($array = mysql_fetch_array($query)){
      								$nome = $_POST['nome'];
      								$data_inicio = $_POST['data_inicio'];
                			$data_fim = $_POST['data_fim'];
                			$hora_inicio = $_POST['hora_inicio'];
                			$dia_semana = $_POST['dia_semanaa'];
                			$descricao = $_POST['descricao'];
                			$teste = $_POST['id_atividade'];
      					 	?>
      							<tr>
      								<td>
      									<?php echo $array['nome']; ?>
      								</td>
      								<td>
      									<?php echo date('d/m/Y', strtotime($array['data_inicio']));  ?> -  <?php echo date('d/m/Y', strtotime($array['data_fim']));  ?>
      								</td>
      								<td>
      									<?php echo date('H:s', strtotime($array['hora_inicio']));?>
      								</td>
      								<td>
      									<?php echo $array['dia_semanaa']; ?>
      								</td>
      								<td>
      									<?php echo $array['descricao']; ?>
      								</td>
      								<td class="text-center">
      									<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target=".modal-alterar" href="#?id=<?=($array['id_atividade']);?>" aria-label="Left Align">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Alterar</button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".modal-excluir" name="excluir"  href="#.php?id=<?=($array['id_atividade']);?>" aria-label="Left Align">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Excluir</button>
      								</td>
      							</tr> <?php  
      							} ?>
                  </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!--LINK RODAPE-->
    <?php include('config/rodape.php'); ?>
    <!--FUNÇÃO ALTERAR-->
    	<?php
			//GET id passada pela lista
			$id=$_GET["id"];
      die(var_dump($id));
			//Faz consulta para achar os dados a partir do id
			$consulta1=mysql_query("SELECT * FROM tb_atividade where id_atividade='".$id."'") 
			or die (mysql_error());
			//Pegando os dados apartir da consulta
			$dados1 = mysql_fetch_array($consulta1);
			//	echo 
			?>
    <!-- Modal Alterar -->
      <div class="modal fade modal-alterar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h3 class="modal-title">Alterar Oficina</h3>
            </div>
          <div class="modal-body">
             <form role="form" action="config/fun_altera_atividade.php" method="post">
            <div class="form-group">
              <label for="basic-url">Tipo de Atividade</label>
              <div class="form-group required">
                <label class="radio-inline">
                  <input type="radio" value="Evento" name="tipo_atividade"
                  	<?php
      								if($dados1['tipo_atividade']=="Evento"){
      									echo 'checked';
    								}?>>Evento
                </label>
                <label class="radio-inline">
                  <input type="radio" value="Oficina" name="tipo_atividade" required
                    <?php
      								if($dados1['tipo_atividade']=="Oficina"){
      									echo 'checked';
    								}?>>Oficina
                </label>
              </div>
              <div class="form-group">
                <label class="control-label" for="nome_ati">Nome da Atividade</label>
                <input class="form-control" name="nome" value="<?=($dados1['nome']);?>" type="text"oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Nome da Atividade')" required />
              </div>
              <div class="row">
                <div class="form-group col-md-3">
                  <label for="basic-url">Data do Início </label>
                  <input class="form-control" name="data_inicio" type="date" autocomplete="off" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Data')" required />
                </div>
                <div class="form-group col-md-3">
                  <label for="basic-url">Data do Término</label>
                  <input class="form-control" name="data_fim" type="date" autocomplete="off" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Data')" required />
                </div>
                <div class="form-group col-md-3">
                  <label for="basic-url">Horário do Início  </label>
                  <input class="form-control" name="hora_inicio" type="text" placeholder="hh:mm" data-mask="00:00" maxlength="5" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Data')" required />
                </div>
                <div class="form-group col-md-3">
                  <label for="basic-url">Horario do Término</label>
                  <input class="form-control" name="hora_fim" type="text" placeholder="hh:mm" data-mask="00:00" maxlength="5" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Data')" required />
                </div>
              </div>
              	<label for="basic-url">Dias da Semana</label>
    						<div class="form-group required">
    							<label class="checkbox-inline">
    						    	<input type="checkbox"  value="Seg" name="dia_semanaa[]" 
    						    	<?php
        								if($dados1['dia_semanaa[]']=="Seg"){
        									echo 'checked';
      								}?>>Evento>Segunda-Feira
    						    </label>
    						    <label class="checkbox-inline">
    						      	<input type="checkbox" value="Ter" name="dia_semanaa[]"
    						      	 <?php
            								if($dados1['dia_semanaa[]']=="Ter"){
            									echo 'checked';
          								}?>>Terça-Feira
    						    </label>
    						    <label class="checkbox-inline">
    						      	<input type="checkbox" value="Qua" name="dia_semanaa[]">Quarta-Feira
    						    </label>
    						    <label class="checkbox-inline">
    						      	<input type="checkbox" value="Qui" name="dia_semanaa[]">Quinta-Feira
    						    </label>
    						    <label class="checkbox-inline">
    						      	<input type="checkbox" value="Sex" name="dia_semanaa[]">Sexta-Feira
    						    </label>
    						    <label class="checkbox-inline">
    						      	<input type="checkbox" value="Sab" name="dia_semanaa[]">Sábado
    						    </label>
    						</div>
    						<div class="form-group">
                  <label class="control-label">Descrição da Atividade</label>
                  <textarea class="form-control" name="descricao" id="des_ati" rows="5" value="<?=($dados1['descricao']);?>" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Descrição da Atividade')" required /></textarea>
                </div>
            </div>
          </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" name="descricao">Salvar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <!-- Modal Excluir -->
    <div class="modal fade modal-excluir" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Excluir Oficina</h3>
        </div>
        <div class="modal-body">
          <p>Você tem certeza que deseja excluir?</p>
        </div>
        <div class="modal-footer">
          <form method="POST">
            <button type="button" name="botaoConfirma" value="<?php echo $dlt ?>" class="btn btn-danger">Excluir</button>
            <button type="button" class="btn btnn-default" data-dismiss="modal">Fechar</button>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
 
  </body>
  <!--LINK SCRIPTS-->
   <?php include('config/scripts.php'); ?>
</html>