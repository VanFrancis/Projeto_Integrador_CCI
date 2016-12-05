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
            <h1>Lista de Cadastros</h1>
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
                <th class="text-center">Nome</th>
                <th class="text-center">CPF</th>
                <th class="text-center">Telefone</th>
                <th class="text-center">Data de Nascimento</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php 
      						$query = mysql_query("SELECT * FROM tb_idoso ORDER BY nome ASC") or die (mysql_error());
      							while ($array = mysql_fetch_array($query)){
      					 	?>
      							<tr>
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
      								    <button type="button" class="btn btn-primary btn-sm" href="#.php?id=<?=($array['id_idoso']);?>" name="visualizar" type="submit" value="visualizar" >
      										<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Visualizar</button></a>
              				    <button type="button" class="btn btn-warning btn-sm" href="altera_cadastro.php?id=<?=($array['id_idoso']);?>"  name="alterar" type="submit" value="Alterar" >
      										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Alterar</button>
                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModalExcluir" name="excluir"  href="#" aria-label="Left Align" data-idatividade="<?php echo $array['id_idoso'];?>">
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
    <?php include('config/rodape.php'); ?>
    <!-- Modal Excluir -->
    <div class="modal fade" id='myModalExcluir' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Excluir Cadastro</h3>
        </div>
        <div class="modal-body">
          <p>Você tem certeza que deseja excluir?</p>
        </div>
        <div class="modal-footer">
          <form method="POST" action="config/exclui_idoso.php">
			      <input name="id_idoso" class="modal_idatividade" type="hidden" required />
            <button type="submit" name="botaoConfirma" class="btn btn-danger">Excluir</button>
            <button type="button" class="btn btnn-default" data-dismiss="modal">Fechar</button>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  </body>
   <?php include('config/scripts.php'); ?>
</html>
<script>
   $('#myModalExcluir').on('show.bs.modal', function (e) {
    var modal_idatividade = $(e.relatedTarget).attr('data-idatividade');
    $(this).find('.modal_idatividade').val(modal_idatividade);
});    
</script>