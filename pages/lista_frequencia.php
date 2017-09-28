<html>
  <head>
      <?php 
      require'config/conexao.php';
      include('config/head.php'); 
      require'config/verifica.php';
      ?>
    </head>
    <body>
    <?php include('config/menu.php'); ?>
    <div class="section">
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          
        <h1>Lista de Frequência: <?php echo date("d/m/Y"); ?></h1>
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
              <tr class="text-center">
                <th class="text-center">#</th>
                <th class="text-center">Oficina</th>
                <th class="text-center">Nome</th>
                <th></th>
              </tr>
            </thead>
            <tbody><?php
               $indice =1;
      						$query = mysql_query("SELECT * FROM tb_frequencia WHERE data='".date("Y-m-d")."' ORDER BY id_atividade ASC") or die (mysql_error());
      							while ($array = mysql_fetch_array($query)){
      							  $query_nome = mysql_query("SELECT * FROM tb_idoso WHERE id_idoso='".$array['id_idoso']."' ");
      							    while($array_nome = mysql_fetch_array($query_nome)){
      							      $nome = $array_nome['nome'];
      							    }
      							  $query_oficina = mysql_query("SELECT * FROM tb_atividade WHERE id_atividade='".$array['id_atividade']."' ");
      							    while($array_oficina = mysql_fetch_array($query_oficina)){
      							      $oficina = $array_oficina['nome'];
      							    }
      					 	?>
      							<tr>
      							  <td class="text-center"> 
      							    <?php echo $indice; $indice++?>
      							  </td>
      								<td>
      									<?php echo  $oficina; ?>
      								</td>
      								<td>
      								  <?php echo $nome;  ?>
      								</td>
      								 <td class="text-center">
              				    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-confirmar" href="#" aria-label="Left Align" data-fre="<?php echo $array['id_frequencia'];?>" >
  										    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Alterar</button>
  										    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModalExcluir" name="excluir"  href="#" aria-label="Left Align" data-idfrequencia="<?php echo $array['id_frequencia'];?>">
                          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Excluir</button>
                        </td>
      							</tr> <?php  
      							} ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php include('config/rodape.php'); ?>
  <!-- Modal Alterar -->
    <div class="modal fade" id="modal-confirmar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Alterar Frenquência</h3>
          </div>
        <div class="modal-body">
          <form role="form" action="config/altera_frequencia.php" method="POST">
          	<div class="form-group">
      				<label>Selecione uma Oficina</label>
              <select class="form-control" name="oficina" required="">
                <option value="" selected="true" disabled="disabled">Selecione...</option>
                <?php
                	$query = mysql_query("SELECT * FROM tb_atividade WHERE tipo_atividade='Oficina' ORDER BY nome ASC") or die (mysql_error());
      							while ($array = mysql_fetch_array($query)){ ?>
      			            <option value="<?php echo $array['id_atividade']?>"><?php echo $array['nome']?></option>
      					<?php }	?>
               <input type="hidden" name="id_frequencia" class="modal_frequencia"/>
              </select>
    			  </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
         </form>
        </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    
    
    
        <!-- Modal Excluir -->
    <div class="modal fade" id='myModalExcluir' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Excluir Frequência</h3>
        </div>
        <div class="modal-body">
          <p>Você tem certeza que deseja excluir?</p>
        </div>
        <div class="modal-footer">
          <form method="POST" action="config/exclui_frequencia.php">
			      <input name="id_frequencia" class="modal_idfrequencia" type="hidden" required />
            <button type="submit" name="botaoConfirma" class="btn btn-danger">Excluir</button>
            <button type="button" class="btn btnn-default" data-dismiss="modal">Fechar</button>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
 
</body>
 <?php include('config/scripts.php'); ?>
</html>
<script type="text/javascript">
    $('#modal-confirmar').on('show.bs.modal', function (e) {
    var modal_frequencia = $(e.relatedTarget).attr('data-fre');
	  $(this).find('.modal_frequencia').val(modal_frequencia);

});
$('#myModalExcluir').on('show.bs.modal', function (e) {
    var modal_idfrequencia = $(e.relatedTarget).attr('data-idfrequencia');
    $(this).find('.modal_idfrequencia').val(modal_idfrequencia);
});    

</script>