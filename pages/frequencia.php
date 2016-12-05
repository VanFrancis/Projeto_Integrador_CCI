<?php 
  require'config/conexao.php';
  require'config/verifica.php';
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
            <form role="form" action="frequencia.php" method="POST">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" id="nome" name="buscar" placeholder="Entre com o Nome ou CPF" required>
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" value="Buscar"  name="Buscar" >Buscar</button>
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
              <!--Mensagens de alerta-->
						<?php
							if(isset($_SESSION['msg_erro'])){
							  echo "<div class='alert alert-danger alert-dismissible fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>";
						    echo $_SESSION['msg_erro'];
								unset($_SESSION['msg_erro']);
							  echo "</strong></div>";
						?>
      	    <?php }
							else{
							  echo "<div class='alert alert-success alert-dismissible fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>";
								  echo $_SESSION['msg'];
								unset($_SESSION['msg']);
								echo "</strong></div>";
							}
						?>
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Telefone</th>
                  <th>Data de Nascimento</th>
                  <th>
                    
                  </th>
                </tr>
              </thead>
             <tbody>
            <!--Tabela quando faz a busca-->
                <?php 
                  $indice=1; 
                  if($_SERVER['REQUEST_METHOD']=='POST'){
                    $query = mysql_query("SELECT * FROM tb_idoso  WHERE  nome LIKE '%".$_POST['buscar']."%' OR cpf LIKE '%".$_POST['buscar']."%' ORDER BY nome ASC  ") or die (mysql_error());
                    while ($array = mysql_fetch_array($query)){ ?>
                  <tr>
                      <td class="text-center">
                        <?php echo $indice; $indice++?>
                      </td>
      								<td>
      									<?php echo $array['nome']; ?>
      								</td>
      								<td>
      								<?php echo $array['cpf']; ?>
      								</td>
      								<td>
      									<?php echo $array['telefone']; ?>
      								</td>
      								<td>
      								  <?php echo date('d/m/Y', strtotime($array['data_nascimento']));  ?>
      								</td>
      								 <td class="text-center">
                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-confirmar" href="#" aria-label="Left Align" data-idoso="<?php echo $array['id_idoso'];?>" >
                          <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirmar</button>
                      </td>
      							</tr>
                   <?php   } 
                  } else{ 
                  // Tabela que mostra todos os registros
                  $indice =1;
      						$query = mysql_query("SELECT * FROM tb_idoso ORDER BY nome ASC") or die (mysql_error());
      							while ($array = mysql_fetch_array($query)){
      					 	?>
      							<tr>
      							  <td class="text-center"> 
      							    <?php echo $indice; $indice++?>
      							  </td>
      								<td>
      									<?php echo $array['nome']; ?>
      								</td>
      								<td>
      								<?php echo $array['cpf']; ?>
      								</td>
      								<td>
      									<?php echo $array['telefone']; ?>
      								</td>
      								<td>
      								  <?php echo date('d/m/Y', strtotime($array['data_nascimento']));  ?>
      								</td>
      								<td class="text-center">
                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-confirmar" href="#" aria-label="Left Align" data-idoso="<?php echo $array['id_idoso'];?>" >
                          <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirmar</button>
                      </td>
      							</tr> <?php  
      							
      							}} ?>
                 
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
     <?php include('config/rodape.php'); ?>
    <!-- Modal Confirmar -->
    <div class="modal fade modal-confirmar" id="modal-confirmar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Confirmar Frenquência</h3>
        </div>
        <div class="modal-body">
          <form role="form" action="config/salva_frequencia.php" method="POST">
          	<div class="form-group">
      				<label>Selecione uma Oficina</label>
              <select class="form-control" name="oficina" required="">
                <option value="" selected="true" disabled="disabled">Selecione...</option>
                <?php
                	$query = mysql_query("SELECT * FROM tb_atividade WHERE tipo_atividade='Oficina' ORDER BY nome ASC") or die (mysql_error());
      							while ($array = mysql_fetch_array($query)){ ?>
      			            <option value="<?php echo $array['id_atividade']?>"><?php echo $array['nome']?></option>
      					<?php }	?>
               <input type="hidden" name="id_idoso" class="modal_idoso"/>
              </select>
    			  </div>
          
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </form>
   
  </body>
   <?php include('config/scripts.php'); ?>
</html>
<script type="text/javascript">
    $('#modal-confirmar').on('show.bs.modal', function (e) {
    var modal_idoso = $(e.relatedTarget).attr('data-idoso');
	  $(this).find('.modal_idoso').val(modal_idoso);

});
</script>
