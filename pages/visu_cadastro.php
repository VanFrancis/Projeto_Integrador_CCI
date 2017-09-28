<html>
  <head>
    <?php 
    require'config/conexao.php';
    include('config/head.php');
    require'config/verifica.php';?>
  </head>
  <body>
    <?php include('config/menu.php'); ?>

	<?php
	//GET id passada pela lista
	$id=$_GET["id"];
	//Faz consulta para achar os dados a partir do id
	$consulta1=mysql_query("SELECT *FROM tb_idoso where id_idoso='".$id."'") 
	or die (mysql_error());
	//Pegando os dados apartir da consulta
	$dados1 = mysql_fetch_array($consulta1);
	//	echo 
	?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><?php echo $dados1['nome'];?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <form role="form" action="#" method="POST">
        	<button type="button" id="imprimir" class="btn btn-primary btn-md col-md-offset-11">Imprimir</button>
            <div>&nbsp;</div>
        	<!--GRUPO IDENTIFICAÇÃO-->
					<fieldset>
					  <legend>Identificação</legend>
						<div class="row">
							<div class="col-lg-6">
								<h4>Data Nascimento: <?php echo date('d/m/Y', strtotime($dados['data_nascimento'])); ?> </h4>
							</div>
							<div class="col-lg-6">
								<h4>Sexo: <?php echo $dados1['sexo'];?> </h4>
							</div>
						</div>	<!--FIM LINHA-->
						<div class="row">
							<div class="col-md-3">
				                <h4>Religião:  <?php echo $dados1['religiao'];?>  </h4>
				            </div>
						    <div class="col-md-3">
							    <h4>UF: <?php echo $dados1['uf'];?> </h4l>
						    </div>
							<div class="col-md-3">
								<h4>Cidade: <?php echo $dados1['cidade'];?> </h4l></h4>							
							</div>
							<div class="col-md-3">
								<h4>Nacionalidade: <?php echo $dados1['nacionalidade'];?></h4>
							</div>
					    </div>
						<div class="row">
							<div class="col-lg-4">
								<h4>CPF: <?php echo $dados1['cpf'];?> </h4>
							</div>
							<div class="col-lg-4">
								<h4>RG: <?php echo $dados1['rg'];?></h4>
							</div>
							<div class="col-lg-4">
								<h4>Emissor: <?php echo $dados1['emissor'];?></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<h4>Endereço: <?php echo $dados1['endereco'];?></h4>
							</div>
							<div class="col-lg-4">
								<h4>Nº: <?php echo $dados1['numero'];?></h4>
							</div>
							<div class="col-lg-4">
								<h4>Bairro: <?php echo $dados1['bairro'];?></h4>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<h4>Trabalha? <?php echo $dados1['trabalha'];?> </h4>
							</div>
						<div class="form-group col-lg-6">
				              <h4>Onde? <?php echo $dados1['trab_onde'];?></h4>
						</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<h4>Telefone: <?php echo $dados1['telefone'];?></h4>
							</div>
							<div class="form-group col-lg-6">
								<h4>Celular: <?php echo $dados1['celular'];?></h4>
							</div>
						</div>
					</fieldset>
					<!--GRUPO CONTATO DE EMERGENCIA-->
					<fieldset>
					  <legend>Contato de Emergência</legend>
						<div class="row">
							<div class="form-group col-lg-4">
								<h4>Nome: <?php echo $dados1['nome_contato'];?></h4>
							</div>
							<div class="form-group col-lg-4">
								<h4>Parentesco: <?php echo $dados1['parentesco'];?></h4>
							</div>
							<div class="form-group col-lg-4">
								<h4>Telefone: <?php echo $dados1['telefone_contato'];?></h4>
							</div>
						</div>
	  			</fieldset>
	  			<!--GRUPO INFROMAÇÕES DE SAUDE-->
					<fieldset>
				  	<legend>Informações de Saúde</legend>
				  	<div class="row">
						<div class="form-group col-lg-12">
					    	<h4>Informação de Saúde:  <?php echo $dados1['doenca'];?> </h4>
				      	</div>
				  	</div>
				  	<div class="row">
				  		<div class="form-group col-lg-4">
								<h4>Medicação de uso contínuo: <?php echo $dados1['medicacao'];?></h4>
							</div>
				  	
				  		<div class="form-group col-lg-4">
							<h4>Alérgico a: <?php echo $dados1['alergico'];?></h4>
						</div>
						<div class="form-group col-lg-4">
							<h4>Outras Enfermidades? <?php echo $dados1['outra_enferm'];?></h4>
						</div>
					</div>
				  	<div class="row">
				  		<div class="form-group col-lg-6">
							<h4>Possui plano de saúde? <?php echo $dados1['plano'];?></h4>
							</div>
						<div class="form-group col-lg-6">
			      			<h4>Qual? <?php echo $dados1['plan_qual'];?></h4>
						</div>
				  	</div>
				  </fieldset>
				  <!--GRUPO INFORMAÇÕES ADICIONAIS-->
					<fieldset>
				  	<legend>Informações Adicionais</legend>
				  	<div class="row">
				    	<div class="form-group col-lg-3">
							<h4>Estado Civil: <?php echo $dados1['estado_civil'];?></h4>
						</div>
						<div class="form-group col-lg-3">
							<h4>Nível de Renda: <?php echo $dados1['nivel_renda'];?></h4>
						</div>
						<div class="form-group col-lg-3">
							<h4>Origem da Renda: <?php echo $dados1['origem_renda'];?></h4>
						</div>
							<div class="form-group col-lg-3">
								<h4>Nível de Instrução: <?php echo $dados1['escolaridade'];?></h4>
							</div>
				  		</div>
				  		<hr>
				  	<div class="row">
				  		<div class="form-group col-lg-4">
							<h4>Como Reside: <?php echo $dados1['reside'];?></h4>
						</div>
						<div class="form-group col-lg-4">
							<h4>Com quem Reside: <?php echo $dados1['com_reside'];?></h4>
						</div>
						<div class="form-group col-lg-4">
			      			<h4>Quantidade de pessoas: <?php echo $dados1['num_redentes'];?></h4>
						</div>
				  	</div>
				  </fieldset>
				  <!--GRUPO PARTICIPAÇÃO DA VIDA FAMILIAR E SOCIAL-->
					<fieldset>
				  	<legend>Participação da Vida Familiar e Social</legend>
				  	<div class="row">
				    	<div class="form-group col-lg-6">
							<h4>Participar das atividades domésticas? <?php echo $dados1['tarefa'];?> </h4>
						</div>
						<div class="form-group col-lg-6">
			      			<h4>Quais as tarefas executadas? <?php echo $dados1['outra_tarefa'];?></h4>
						</div>
					</div>
					<div class="row">
							<div class="form-group col-lg-6">
								<h4>Participa de outro Grupo ou Associação? <?php echo $dados1['grupo'];?></h4>
							</div>
							<div class="form-group col-lg-6">
			      				<h4>Qual? <?php echo $dados1['outro_parti'];?></h4>
							</div>
				  	</div>
				 	</fieldset>
				 	<!--GRUPO ASPECTOS PSICOLOGICOS-->
				 	<fieldset>
			  	  <legend>Aspectos Psicológicos</legend>
			  	  <div class="row">
			  	    <div class="form-group col-lg-4">
						<h4>Aspectos: <?php echo $dados1['psicologico'];?> </h4>
							</div>
			      	<div class="form-group col-lg-8">
						<h4>Outro:  <?php echo $dados1['outro_psi'];?></h4>
					</div>
			  	  </div>
				 	</fieldset>
	 				<!--GRUPO INTERESSSES E PREFERENCIAS-->
				 	<fieldset>
			  	  <legend>Interesses e Preferências</legend>
			  	  <div class="row">
			  	    <div class="form-group col-lg-7">
			  	    	<h4>Atividade Física: <?php echo $dados1['at_fisica'];?> </h4>
			      	</div>
			  	  </div>
			  	  <div class="row">
			  	  	 <div class="form-group col-lg-6">
			  	    	<h4>Atividade Sócio-Educativas: <?php echo $dados1['at_socio'];?> </h4>
				   
			        	</div>
			  	  </div>
				 	</fieldset>
				</form>
      </div>
    </div>
    <!--RODAPÉ-->
    <?php include('config/rodape.php'); ?>
  </body>
   <?php include('config/scripts.php'); ?>
</html>
<script>
   $('#imprimir').click(function () {
      window.print();
  });    
</script>