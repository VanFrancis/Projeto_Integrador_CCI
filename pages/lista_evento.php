<?php 
	require'config/conexao.php';
	require'config/funcoes.php';
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
        <div class="col-md-6">
          <h1>Lista de Eventos</h1>
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
      						$query = mysql_query("SELECT * FROM tb_atividade WHERE tipo_atividade='Evento' ORDER BY id_atividade DESC") or die (mysql_error());
      							while ($array = mysql_fetch_array($query)){ ?>
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
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal" href="#" aria-label="Left Align"
                                    	data-idatividade="<?php echo $array['id_atividade'];?>"
                                        data-nome="<?php echo $array['nome']; ?>"
                                        data-dinicio="<?php echo date('d/m/Y', strtotime($array['data_inicio'])); ?>"
                                        data-dfim="<?php echo date('d/m/Y', strtotime($array['data_fim']));  ?>"
                                        data-hinicio="<?php echo date('H:s', strtotime($array['hora_inicio']));?>"
                                        data-hfim="<?php echo date('H:s', strtotime($array['hora_fim']));?>"
                                        data-descricao="<?php echo $array['descricao'];?>"
                                        <?php echo organiza_dias_botao($array['dia_semanaa']); ?>
                                        
                                     >
                										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Alterar</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModalExcluir" name="excluir"  href="#" aria-label="Left Align" data-idatividade="<?php echo $array['id_atividade'];?>">
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
    
    <!-- Modal Alterar -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h3 class="modal-title">Alterar Evento</h3>
              
            </div>
          <div class="modal-body">
             <form role="form" action="config/altera_atividade.php" method="post">
            <div class="form-group">
              <label for="basic-url">Tipo de Atividade</label>
              <div class="form-group required">
                <label class="radio-inline">
                  <input type="radio" class="tevento" value="Evento" name="tipo_atividade" checked>Evento
                </label>
                <label class="radio-inline">
                  <input type="radio" value="Oficina" name="tipo_atividade">Oficina
                </label>
              </div>
              <div class="form-group">
                <label class="control-label" for="nome_ati">Nome da Atividade</label>
                 <input name="id_atividade"  class="modal_idatividade" type="hidden" required />
                <input name="nome" class="modal_nome" type="text"oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Nome da Atividade')" required />
              </div>
              <div class="row">
                <div class="form-group col-md-3">
                  <label for="basic-url">Data do Início </label>
                  <input name="data_inicio" class="modal_dinicio" type="text" autocomplete="off" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Data')" required />
                </div>
                <div class="form-group col-md-3">
                  <label for="basic-url">Data do Término</label>
                  <input name="data_fim" class="modal_dfim" type="text" autocomplete="off" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Data')" required />
                </div>
                <div class="form-group col-md-3">
                  <label for="basic-url">Horário do Início  </label>
                  <input name="hora_inicio" class="modal_hinicio" type="text" placeholder="hh:mm" data-mask="00:00" maxlength="5" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Data')" required />
                </div>
                <div class="form-group col-md-3">
                  <label for="basic-url">Horario do Término</label>
                  <input name="hora_fim" class="modal_hfim" type="text" placeholder="hh:mm" data-mask="00:00" maxlength="5" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Data')" required />
                </div>
              </div>
              	<label for="basic-url">Dias da Semana</label>
    						<div class="form-group required">
    							<label class="checkbox-inline">
    						    	<input type="checkbox"  value="Seg" class="modal_seg" name="dia_semanaa[]">Segunda-Feira
    						    </label>
    						    <label class="checkbox-inline">
    						      	<input type="checkbox" value="Ter" class="modal_ter" name="dia_semanaa[]">Terça-Feira
    						    </label>
    						    <label class="checkbox-inline">
    						      	<input type="checkbox" value="Qua" class="modal_qua" name="dia_semanaa[]">Quarta-Feira
    						    </label>
    						    <label class="checkbox-inline">
    						      	<input type="checkbox" value="Qui" class="modal_qui" name="dia_semanaa[]">Quinta-Feira
    						    </label>
    						    <label class="checkbox-inline">
    						      	<input type="checkbox" value="Sex" class="modal_sex" name="dia_semanaa[]">Sexta-Feira
    						    </label>
    						    <label class="checkbox-inline">
    						      	<input type="checkbox" value="Sab" class="modal_sab" name="dia_semanaa[]">Sábado
    						    </label>
    						</div>
    						<div class="form-group">
                  <label class="control-label">Descrição da Atividade</label>
                  <textarea name="descricao" id="des_ati" class="modal_descricao" rows="5" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Descrição da Atividade')" required /></textarea>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" value="" name="alterar">Alterar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </form>
    
    <!-- Modal Excluir -->
    <div class="modal fade" id='myModalExcluir' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Excluir Evento</h3>
        </div>
        <div class="modal-body">
          <p>Você tem certeza que deseja excluir?</p>
        </div>
        <div class="modal-footer">
          <form method="POST" action="config/exclui_atividade.php">
			<input name="id_atividade" class="modal_idatividade" type="hidden" required />
            <button type="submit" name="botaoConfirma" class="btn btn-danger">Excluir</button>
            <button type="button" class="btn btnn-default" data-dismiss="modal">Fechar</button>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
   
  </body>
  <!--LINK SCRIPTS-->
   <?php include('config/scripts.php'); ?>
</html>
<script type="text/javascript">
    $('#myModal').on('show.bs.modal', function (e) {
    var modal_idatividade = $(e.relatedTarget).attr('data-idatividade');
    var modal_nome = $(e.relatedTarget).attr('data-nome');
    var modal_dinicio = $(e.relatedTarget).attr('data-dinicio');
    var modal_dfim = $(e.relatedTarget).attr('data-dfim');
    var modal_hinicio = $(e.relatedTarget).attr('data-hinicio');
    var modal_hfim = $(e.relatedTarget).attr('data-hfim');
    var modal_descricao = $(e.relatedTarget).attr('data-descricao');
    
    var modal_seg = $(e.relatedTarget).attr('data-seg');
    var modal_ter = $(e.relatedTarget).attr('data-ter');
    var modal_qua = $(e.relatedTarget).attr('data-qua');
    var modal_qui = $(e.relatedTarget).attr('data-qui');
    var modal_sex = $(e.relatedTarget).attr('data-sex');
    var modal_sab = $(e.relatedTarget).attr('data-sab');
	
	$(this).find('.modal_idatividade').val(modal_idatividade);
	$(this).find('.modal_nome').val(modal_nome);
    $(this).find('.modal_dinicio').val(modal_dinicio);
    $(this).find('.modal_dfim').val(modal_dfim);
    $(this).find('.modal_hinicio').val(modal_hinicio);
    $(this).find('.modal_hfim').val(modal_hfim);
    $(this).find('.modal_descricao').val(modal_descricao);
    
    if(modal_seg == "true") { $(this).find('.modal_seg').prop("checked",true).attr('checked', 'checked'); } else { $(this).find('.modal_seg').prop("checked",false).removeAttr('checked');}
    if(modal_ter == "true") { $(this).find('.modal_ter').prop("checked",true).attr('checked', 'checked'); } else { $(this).find('.modal_ter').prop("checked",false).removeAttr('checked');}
    if(modal_qua == "true") { $(this).find('.modal_qua').prop("checked",true).attr('checked', 'checked'); } else { $(this).find('.modal_qua').prop("checked",false).removeAttr('checked');}
    if(modal_qui == "true") { $(this).find('.modal_qui').prop("checked",true).attr('checked', 'checked'); } else { $(this).find('.modal_qui').prop("checked",false).removeAttr('checked');}
    if(modal_sex == "true") { $(this).find('.modal_sex').prop("checked",true).attr('checked', 'checked'); } else { $(this).find('.modal_sex').prop("checked",false).removeAttr('checked');}
    if(modal_sab == "true") { $(this).find('.modal_sab').prop("checked",true).attr('checked', 'checked'); } else { $(this).find('.modal_sab').prop("checked",false).removeAttr('checked');}
    
	
});
 $('#myModalExcluir').on('show.bs.modal', function (e) {
    var modal_idatividade = $(e.relatedTarget).attr('data-idatividade');
    $(this).find('.modal_idatividade').val(modal_idatividade);
});    

</script>