<html>
  <head>
    <?php 
    include('config/head.php'); 
    require'config/conexao.php';
    require'config/verifica.php';
    require'config/funcoes.php';
    ?>
  </head>
  <body>
    <?php include('config/menu.php');  ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Relatórios</h1>
          </div>
        </div>
        <div class="row">
          <div class=" col-lg-12 well well-sm text-center">
            <h3>Selecione um perído para gerar o relatório</h3></br>
            <form class="form-inline" method="POST" action="relatorio.php">
              <div class="form-group">
                <label>Data Inicial </label>
                <?php if($_SERVER['REQUEST_METHOD']=='POST'){
                  $data_inicio= $_POST['data_inicio'];
                  $data_fim=  $_POST['data_final'];
                  
                }
                  ?>
                <input type="date" class="form-control" value="<?php echo $data_inicio ?>" name="data_inicio"oninput="setCustomValidity('')" required />
              </div>
              <div class="form-group">
                <label>&nbsp;Data Final </label>
                <input type="date" class="form-control" value="<?php echo $data_fim ?>" name="data_final"oninput="setCustomValidity('')"required />
              </div>
              <button type="submit" class="btn btn-primary btn-md">Gerar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

      <div class="container">
        <div class="row">
          <div>
            
            <button type="button" id="imprimir" class="btn btn-primary btn-md col-md-offset-11">Imprimir</button>
            <div>&nbsp;</div>
            <table class="col-lg-12 table table-hover table-condensed table-bordered">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Oficina</th>
                  <th> Data</th>
                  <th>Hora</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                  $data_inicio= $_POST['data_inicio'];
                  $data_fim=  $_POST['data_final'];
                  $indice=1;
                  $query = mysql_query("SELECT * FROM tb_frequencia WHERE data BETWEEN '".$data_inicio."' AND '".$data_fim."' ORDER BY id_atividade ASC") or die (mysql_error());
      							while ($array = mysql_fetch_array($query)){
      						//	die(var_dump($array[0]));
      							  $query_nome = mysql_query("SELECT * FROM tb_idoso WHERE id_idoso =".$array['id_idoso']) or die (mysql_error());
      							  while($array_nome= mysql_fetch_array($query_nome)){
      							    $nome = $array_nome ['nome'];
      							    $cpf = $array_nome['cpf'];
      							  }
      							  $query_at = mysql_query("SELECT * FROM tb_atividade WHERE id_atividade =".$array['id_atividade']) or die (mysql_error());
      							  while($array_at= mysql_fetch_array($query_at)){
      							    $atividade = $array_at ['nome'];
      						
      							  }
      					 	?>
      							<tr>
      							  <td class="text-center"> 
      							    <?php echo $indice; $indice++?>
      							  </td>
      								<td>
      									<?php echo $nome; ?>
      								</td>
      								<td>
      								<?php echo $cpf;?>
      								</td>
      								<td>
      									<?php echo $atividade; ?>
      								</td>
      								<td>
      								  <?php echo date('d/m/Y', strtotime($array['data']));  ?>
      								</td>
      								<td>
      								  <?php echo date('H:m', strtotime($array['hora']));  ?>
      								</td>
      								
      							</tr> <?php  
      							
      							} } ?>
                 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <?php include('config/rodape.php'); ?>
  </body>
   <?php include('config/scripts.php'); ?>
</html>
<script>
   $('#imprimir').click(function () {
      window.print();
  });    
</script>