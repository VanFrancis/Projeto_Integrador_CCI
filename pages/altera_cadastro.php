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
          <div class="col-md-12">
            <h1>Alterar Cadastro</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
      	<h5>Campos com <spam class="text-danger">*</spam> são obrigatórios</h5>
        <form role="form" action="config/altera_cad.php" method="POST">
        	<!--GRUPO IDENTIFICAÇÃO-->
					<fieldset>
					  <legend>Identificação</legend>
						<div class="row">
							<div class="form-group col-lg-5">
								<label class="control-label">Nome Completo <spam class="text-danger">*</spam></label>
				        		<input class="form-control" name="nome" value="<?=($dados1['nome']);?>" type="text" oninput="setCustomValidity('')" 
							oninvalid="this.setCustomValidity('Preencha o campo Nome Completo')" required />
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label">Data Nascimento<spam class="text-danger">*</spam></label>
				        		<input class="form-control" name="data_nascimento" value="<?=($dados1['data_nascimento']);?>"type="date"oninput="setCustomValidity('')" 
							oninvalid="this.setCustomValidity('Preencha o campo Data de Nascimento')" required/>
							</div>
							<div class="form-group col-lg-4">
								<label>Sexo</label>
				        <select class="form-control">
				          <option value="" selected="true" disabled="disabled">Selecione...</option>
				          <option value="Feminino" name="sexo" <?php
									if($dados1['sexo']=='Feminino'){
										echo 'selected';
									}
								?>>Feminino</option>
				          <option value="Masculino" name="sexo" <?php
									if($dados1['sexo']=='Masculino'){
										echo 'selected';
									}
								?>>Masculino</option>
				        </select>
							</div>
						</div>	<!--FIM LINHA-->
						<div class="row">
							<div class="form-group col-lg-3">
				        <label>Religião</label>
				        <select class="form-control">
				          <option value="" selected="true" disabled="disabled">Selecione...</option>
				          <option value="Católico" name ="religiao" <?php
									if($dados1['religiao']=='Católico'){
										echo 'selected';
									}
								?>>Católico</option>
				          <option value="Evangélico" name ="religiao" <?php
									if($dados1['religiao']=='Evangélico'){
										echo 'selected';
									}
								?>>Evangélico</option>
				          <option value="Protestante" name ="religiao" <?php
									if($dados1['religiao']=='Protestante'){
										echo 'selected';
									}
								?>>Protestante</option>
				          <option value="Espirita" name ="religiao" <?php
									if($dados1['religiao']=='Espirita'){
										echo 'selected';
									}
								?>>Espirita</option>
				          <option value="Outra religião" name ="religiao" <?php
									if($dados1['religiao']=='Outra religião'){
										echo 'selected';
									}
								?>>Outra religião</option>
				          <option value="Sem religião" name ="religiao" <?php
									if($dados1['religiao']=='Sem religião'){
										echo 'selected';
									}
								?>>Sem religião</option>
				        </select>
				      </div>
						<div class="form-group col-lg-2">
							<label>UF</label>
				        <select class="form-control">
				          <option value="" selected="true" disabled="disabled">Selecione...</option>
				          <option value="AC" name="uf" <?php
									if($dados1['uf']=='AC'){
										echo 'selected';
									}
								?>>AC</option>
				          <option value="AL" name="uf"<?php
									if($dados1['uf']=='AL'){
										echo 'selected';
									}
								?>>Al</option>
				          
				          <option value="AP" name="uf" <?php
									if($dados1['uf']=='AP'){
										echo 'selected';
									}
								?>>AP</option>
				          <option value="AM" name="uf" <?php
									if($dados1['uf']=='AM'){
										echo 'selected';
									}
								?>>AM</option>
				          <option value="BA" name="uf" <?php
									if($dados1['uf']=='BA'){
										echo 'selected';
									}
								?>>BA</option>
				          <option value="CE" name="uf" <?php
									if($dados1['uf']=='AC'){
										echo 'selected';
									}
								?>>CE</option>
				          <option value="DF" name="uf" <?php
									if($dados1['uf']=='DF'){
										echo 'selected';
									}
								?>>DF</option>
				          <option value="ES" name="uf" <?php
									if($dados1['uf']=='ES'){
										echo 'selected';
									}
								?>>ES</option>
				          <option value="GO" name="uf" <?php
									if($dados1['uf']=='GO'){
										echo 'selected';
									}
								?>>GO</option>
				          <option value="MA" name="uf" <?php
									if($dados1['uf']=='MA'){
										echo 'selected';
									}
								?>>MA</option>
				          <option value="MT" name="uf" <?php
									if($dados1['uf']=='MT'){
										echo 'selected';
									}
								?>>MT</option>
				          <option value="MS" name="uf" <?php
									if($dados1['uf']=='MS'){
										echo 'selected';
									}
								?>>MS</option>
				          <option value="MG" name="uf" <?php
									if($dados1['uf']=='MG'){
										echo 'selected';
									}
								?>>MG</option>
				          <option value="PA" name="uf" <?php
									if($dados1['uf']=='PA'){
										echo 'selected';
									}
								?>>PA</option>
				          <option value="PB" name="uf" <?php
									if($dados1['uf']=='PB'){
										echo 'selected';
									}
								?>>PB</option>
				          <option value="PE" name="uf" <?php
									if($dados1['uf']=='PE'){
										echo 'selected';
									}
								?>>PE</option>
				          <option value="RJ" name="uf" <?php
									if($dados1['uf']=='RJ'){
										echo 'selected';
									}
								?>>RJ</option>
				          <option value="RN" name="uf" <?php
									if($dados1['uf']=='RN'){
										echo 'selected';
									}
								?>>RN</option>
				          <option value="RS" name="uf"<?php
									if($dados1['uf']=='RS'){
										echo 'selected';
									}
								?>>RS</option>
				          <option value="RO" name="uf" <?php
									if($dados1['uf']=='RO'){
										echo 'selected';
									}
								?>>RO</option>
				          <option value="RR" name="uf" <?php
									if($dados1['uf']=='RR'){
										echo 'selected';
									}
								?>>RR</option>
				          <option value="SC" name="uf" <?php
									if($dados1['uf']=='AC'){
										echo 'selected';
									}
								?>>SC</option>
				          <option value="SP" name="uf" <?php
									if($dados1['uf']=='SP'){
										echo 'selected';
									}
								?>>SP</option>
				          <option value="SE" name="uf" <?php
									if($dados1['uf']=='SE'){
										echo 'selected';
									}
								?>>SE</option>
				          <option value="TO" name="uf" <?php
									if($dados1['uf']=='TO'){
										echo 'selected';
									}
								?>>TO</option>
				        </select>
						</div>
							<div class="form-group col-lg-4">
								<label>Cidade</label>
								<input type="text" name="cidade" class="form-control"  value="<?=($dados1['cidade']);?>"  placeholder="Cidade">
							</div>
							<div class="form-group col-lg-3">
								<label>Nacionalidade</label>
								<input type="text" name ="nacionalidade" class="form-control"  value="<?=($dados1['nacionalidade']);?>"  placeholder="Nacionalidade">
							</div>
					</div>
						<div class="row">
							<div class="form-group col-lg-4">
								<label>CPF <spam class="text-danger">*</spam></label>
								<input type="text" name="cpf" class="form-control" autocomplete="off"  data-mask="000.000.000-00" maxlength="12"  value="<?=($dados1['cpf']);?>" placeholder="000.000.000 - 00"oninput="setCustomValidity('')" 
							oninvalid="this.setCustomValidity('Preencha o campo CPF')" required/>
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">RG</label>
								<input type="text" class="form-control" value="<?=($dados1['rg']);?>" placeholder="RG">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Emissor</label>
								<input type="text" name ="emissor" class="form-control" value="<?=($dados1['emissor']);?>" placeholder="Emissor">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Endereço <spam class="text-danger">*</spam></label>
								<input type="text" name="endereco" class="form-control" value="<?=($dados1['endereco']);?>" placeholder="Endereço"oninput="setCustomValidity('')" 
							oninvalid="this.setCustomValidity('Preencha o campo Endereço')" required />
							</div>
							<div class="form-group col-lg-2">
								<label for="exampleInputEmail1">Nº <spam class="text-danger">*</spam></label>
								<input type="text" name="numero" class="form-control" value="<?=($dados1['numero']);?>" placeholder="Numero"oninput="setCustomValidity('')" 
								oninvalid="this.setCustomValidity('Preencha o campo Número')" required/>
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Bairro <spam class="text-danger">*</spam></label>
								<input type="text" name="bairro" class="form-control" value="<?=($dados1['bairro']);?>" placeholder="Bairro"oninput="setCustomValidity('')" 
								oninvalid="this.setCustomValidity('Preencha o campo Bairro')" required />
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-2">
								<label>Trabalha?</label>
								<select class="form-control">
				          <option value="" selected="true" disabled="disabled">Selecione...</option>
				          <option value="Sim" name="trabalha"  <?php
									if($dados1['trabalha']=='Sim'){
										echo 'selected';
									}
								?>>Sim</option>
				          <option value="Não" name="trabalha"  <?php
									if($dados1['trabalho']=='Não'){
										echo 'selected';
									}
								?>>Não</option>
				         </select>
							</div>
						  <div class="form-group col-lg-10">
				      	<label>Onde?</label>
								<input type="text" name="trab_onde" class="form-control" value="<?=($dados1['trab_onde']);?>" placeholder="Onde?">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Telefone <spam class="text-danger">*</spam></label>
								<input type="text" name="telefone" class="form-control" value="<?=($dados1['telefone']);?>" placeholder="Telefone" oninput="setCustomValidity('')" 
							oninvalid="this.setCustomValidity('Preencha o campo Telefone')" required />
							</div>
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Celular</label>
								<input type="text" name="celular" class="form-control" value="<?=($dados1['celular']);?>" placeholder="Celular">
							</div>
						</div>
					</fieldset>
					<!--GRUPO CONTATO DE EMERGENCIA-->
					<fieldset>
					  <legend>Contato de Emergência</legend>
						<div class="row">
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Nome</label>
								<input type="text" name="nome_contato" value="<?=($dados1['nome_contato']);?>" class="form-control" placeholder="Nome">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Parentesco</label>
								<input type="text"name="parentesco" class="form-control" value="<?=($dados1['parentesco']);?>"  placeholder="Parentesco">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Telefone</label>
								<input type="text" name="telefone_contato" class="form-control" value="<?=($dados1['telefone_contato']);?>"  placeholder="Telefone">
							</div>
						</div>
	  			</fieldset>
	  			<!--GRUPO INFROMAÇÕES DE SAUDE-->
					<fieldset>
				  	<legend>Informações de Saúde</legend>
				  	<div class="row">
						<div class="form-group col-lg-12">
					    	<label class="checkbox-inline">
				          		<input type="checkbox" value="Diabetes" name="doenca[]"  <?php
									$sDoenca = explode(",", $dados1['doenca']);
									echo ($sDoenca[0]);
									
									if($dados1['doenca[]']=='Diabetes'){
										echo 'checked'; 
									}
								?>>Diabetes
				        	</label>
				        	<label class="checkbox-inline">
				          		<input type="checkbox" value="Hipertensão" name="doenca[]"  <?php
									if($dados1['doenca[]']=='Hipertensão'){
										echo 'checked';
									}
								?>>Hipertensão
				        	</label>
				        	<label class="checkbox-inline">
				          		<input type="checkbox" value="Osteoporose" name="doenca[]"  <?php
									if($dados1['doenca[]']=='Osteoporose'){
										echo 'checked';
									}
								?>>Osteoporose
				        	</label>
				        	<label class="checkbox-inline">
				          		<input type="checkbox" value="Tabagista" name="doenca[]"  <?php
									if($dados1['doenca[]']=='Tabagista'){
										echo 'checked';
									}
								?>>Tabagista
				        	</label>
				      	</div>
				  	</div>
				  	<div class="row">
				  		<div class="form-group col-lg-12">
								<label for="exampleInputEmail1">Medicação de uso contínuo:</label>
								<textarea class="form-control" name="medicacao" value="<?=($dados1['medicacao']);?>"  id="des_ati" rows="5" placeholder="Medicação de uso contínuo..."></textarea>
							</div>
				  	</div>
				  	<div class="row">
				  		<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Alérgico a:</label>
								<input type="text" name="alergico" value="<?=($dados1['alergico']);?>"  class="form-control" placeholder="Alérgia">
							</div>
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Outras Enfermidades?</label>
								<input type="text" name="outra_enferm" value="<?=($dados1['outra_enferm']);?>"  class="form-control" placeholder="Outras Enfermidades?">
							</div>
				  	</div>
				  	<div class="row">
				  		<div class="form-group col-lg-3">
							<label>Possui plano de saúde?</label>
							<select class="form-control">
					          	<option value="" selected="true" disabled="disabled">Selecione...</option>
					          	<option value="Sim" name="plano"  <?php
									if($dados1['plano']=='Sim'){
										echo 'selected';
									}
								?>>Sim</option>
					          	<option value="Não" name="plano"  <?php
									if($dados1['plano']=='Não'){
										echo 'selected';
									}
								?>>Não</option>
				         	</select>
							</div>
						<div class="form-group col-lg-9">
			      			<label>Qual?</label>
							<input type="text" name="plan_qual" class="form-control" value="<?=($dados1['plan_qual']);?>" placeholder="Qual?">
						</div>
				  	</div>
				  </fieldset>
				  <!--GRUPO INFORMAÇÕES ADICIONAIS-->
					<fieldset>
				  	<legend>Informações Adicionais</legend>
				  	<div class="row">
				    	<div class="form-group col-lg-3">
							<label>Estado Civil</label>
							<select class="form-control">
					          	<option value="" selected="true" disabled="disabled">Selecione...</option>
					          	<option value="Casado" name="estado_civil"  <?php
									if($dados1['estado_civil']=='Casado'){
										echo 'selected';
									}
								?>>Casado</option>
					          	<option value="Solteiro" name="estado_civil" <?php
									if($dados1['estado_civil']=='Solteiro'){
										echo 'selected';
									}
								?>>Solteiro</option>
					          	<option value="Viúvo" name="estado_civil" <?php
									if($dados1['estado_civil']=='Viúvo'){
										echo 'selected';
									}
								?>>Viúvo</option>
					          	<option value="União Estável" name="estado_civil" <?php
									if($dados1['estado_civil']=='União Estável'){
										echo 'selected';
									}
								?>>União Estável</option>
					          	<option value="Outros" name="estado_civil" <?php
									if($dados1['estado_civil']=='Outros'){
										echo 'selected';
									}
								?>>Outros</option>
				         	</select>
						</div>
						<div class="form-group col-lg-3">
							<label>Nível de Renda</label>
							<select class="form-control">
					          	<option value="" selected="true" disabled="disabled">Selecione...</option>
					          	<option value="Sem Renda" name="nivel_renda"  <?php
									if($dados1['nivel_renda']=='Sem Renda'){
										echo 'selected';
									}
								?>>Sem Renda</option>
					          	<option value="Até 01 Sal. min" name="nivel_renda"  <?php
									if($dados1['nivel_renda']=='Até 01 Sal. min'){
										echo 'selected';
									}
								?>>Até 01 Sal. min</option>
					          	<option value="De 02 a 03" name="nivel_renda"  <?php
									if($dados1['nivel_renda']=='De 02 a 03'){
										echo 'selected';
									}
								?>>De 02 a 03</option>
					          	<option value="Acima de 03" name="nivel_renda"  <?php
									if($dados1['nivel_renda']=='Acima de 03'){
										echo 'selected';
									}
								?>>Acima de 03</option>
			         		</select>
						</div>
						<div class="form-group col-lg-3">
							<label>Origem da Renda</label>
							<select class="form-control">
					          	<option value="" selected="true" disabled="disabled">Selecione...</option>
					          	<option value="Trabalho Remunerado" name="origem_renda"  <?php
									if($dados1['nivel_renda']=='Trabalho Remunerado'){
										echo 'selected';
									}
								?>>Trabalho Remunerado</option>
					          	<option value="Aposentadoria" name="origem_renda" <?php
									if($dados1['origem_renda']=='Aposentadoria'){
										echo 'selected';
									}
								?>>Aposentadoria</option>
					          	<option value="Pensão" name="origem_renda" <?php
									if($dados1['origem_renda']=='Pensão'){
										echo 'selected';
									}
								?>>Pensão</option>
					          	<option value="Benefício BPC" name="origem_renda" <?php
									if($dados1['origem_renda']=='Benefício BPC'){
										echo 'selected';
									}
								?>>Benefício BPC</option>
					          	<option value="Outros" name="origem_renda" <?php
									if($dados1['origem_renda']=='Outros'){
										echo 'selected';
									}
								?>>Outros</option>
			         		</select>
						</div>
							<div class="form-group col-lg-3">
								<label>Nível de Instrução</label>
								<select class="form-control">
						          	<option value="" selected="true" disabled="disabled">Selecione...</option>
						          	<option value="Não Alfabetizado" name="escolaridade" <?php
									if($dados1['escolaridade']=='Não Alfabetizado'){
										echo 'selected';
									}
								?>>Não Alfabetizado</option>
						          	<option value="Alfabetizado" name="escolaridade" <?php
									if($dados1['escolaridade']=='Alfabetizado'){
										echo 'selected';
									}
								?>>Alfabetizado</option>
						          	<option value="Fundamental Incompleto" name="escolaridade" <?php
									if($dados1['escolaridade']=='Fundamental Incompleto'){
										echo 'selected';
									}
								?>>Fundamental Incompleto</option>
						          	<option value="Fundamental Completo"name="escolaridade" <?php
									if($dados1['escolaridade']=='Fundamental Completo'){
										echo 'selected';
									}
								?>>Fundamental Completo</option>
						          	<option value="Médio Incompleto" name="escolaridade" <?php
									if($dados1['escolaridade']=='Médio Incompleto'){
										echo 'selected';
									}
								?>>Médio Incompleto</option>
						          	<option value="Médio Completo" name="escolaridade" <?php
									if($dados1['escolaridade']=='Médio Completo'){
										echo 'selected';
									}
								?>>Médio Completo</option>
						          	<option value="Superior Incompleto" name="escolaridade" <?php
									if($dados1['escolaridade']=='Superior Incompleto'){
										echo 'selected';
									}
								?>>Superior Incompleto</option>
						          	<option value="Superior Completo" name="escolaridade" <?php
									if($dados1['escolaridade']=='Superior Completo'){
										echo 'selected';
									}
								?>>Superior Completo</option>
					         	</select>
							</div>
				  		</div>
				  		<hr>
				  	<div class="row">
				  		<div class="form-group col-lg-4">
							<label>Como Reside</label>
							<select class="form-control">
					          	<option value="" selected="true" disabled="disabled">Selecione...</option>
					          	<option value="Em sua própria casa" name="reside" <?php
									if($dados1['reside']=='Em sua própria casa'){
										echo 'selected';
									}
								?>>Em sua própria casa</option>
					          	<option value="Casa de familiares" name="reside" <?php
									if($dados1['reside']=='Casa de familiares'){
										echo 'selected';
									}
								?>>Casa de familiares</option>
					          	<option value="Casa de terceiros" name="reside" <?php
									if($dados1['reside']=='Casa de terceiros'){
										echo 'selected';
									}
								?>>Casa de terceiros</option>
					          	<option value="Outros" name="reside" <?php
									if($dados1['reside']=='Outros'){
										echo 'selected';
									}
								?>>Outros</option>
					         </select>
						</div>
						<div class="form-group col-lg-4">
							<label>Com quem Reside</label>
							<select class="form-control">
					          	<option value="" selected="true" disabled="disabled">Selecione...</option>
					          	<option value="Só" name="com_reside">Só</option>
					          	<option value="Com companheiro" name="com_reside"  <?php
									if($dados1['com_reside']=='Com companheiro(a)'){
										echo 'selected';
									}
								?>>Com companheiro(a)</option>
					          	<option value="Com familiares" name="com_reside" <?php
									if($dados1['com_reside']=='Com familiares'){
										echo 'selected';
									}
								?>>Com familiares</option>
					          	<option value="Com familiares" name="com_reside" <?php
									if($dados1['com_reside']=='Com terceiros'){
										echo 'selected';
									}
								?>>Com terceiros</option>
			         		</select>
						</div>
						<div class="form-group col-lg-4">
			      			<label>Quantidade de pessoas</label>
							<input type="text" name="num_redentes" value="<?=($dados1['num_redentes']);?>" class="form-control" placeholder="Quantidade">
						</div>
				  	</div>
				  </fieldset>
				  <!--GRUPO PARTICIPAÇÃO DA VIDA FAMILIAR E SOCIAL-->
					<fieldset>
				  	<legend>Participação da Vida Familiar e Social</legend>
				  	<div class="row">
				    	<div class="form-group col-lg-6">
							<label>Participar das atividades domésticas?</label>
							<select class="form-control">
					          	<option value="" selected="true" disabled="disabled">Selecione...</option>
					          	<option value="Frequentemente" name="tarefa" <?php
									if($dados1['tarefa']=='Frequentemente'){
										echo 'selected';
									}
								?>>Frequentemente</option>
					          	<option value="Raramente" name="tarefa" <?php
									if($dados1['tarefa']=='Raramente'){
										echo 'selected';
									}
								?>>Raramente</option>
					          	<option value="Nunca" name="tarefa" <?php
									if($dados1['tarefa']=='Nunca'){
										echo 'selected';
									}
								?>>Nunca</option>
			         		</select>
						</div>
						<div class="form-group col-lg-6">
			      			<label>Quais as tarefas executadas?</label>
							<input type="text" name="outra_tarefa"  value="<?=($dados1['outra_tarefa']);?>" class="form-control" placeholder="Quais as tarefas executadas?">
						</div>
					</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<label>Participa de outro Grupo ou Associação?</label>
								<select class="form-control" >
						          	<option value="" selected="true" disabled="disabled">Selecione...</option>
						          	<option value="Sim" name="grupo" <?php
									if($dados1['grupo']=='Sim'){
										echo 'selected';
									}
								?>>Sim</option>
						          	<option value="Não" name="grupo" <?php
									if($dados1['grupo']=='Não'){
										echo 'selected';
									}
								?>>Não</option>
					         	</select>
							</div>
							<div class="form-group col-lg-6">
			      				<label>Qual?</label>
								<input type="text" name="outro_parti" value="<?=($dados1['outro_parti']);?>" class="form-control" placeholder="Outros">
							</div>
				  		</div>
				 	</fieldset>
				 	<!--GRUPO ASPECTOS PSICOLOGICOS-->
				 	<fieldset>
			  	  <legend>Aspectos Psicológicos</legend>
			  	  <div class="row">
			  	    <div class="form-group col-lg-4">
						<select class="form-control">
				          	<option value="" selected="true" disabled="disabled">Selecione...</option>
				          	<option value="Depressão" name="psicologico" <?php
									if($dados1['psicologico']=='Depressão'){
										echo 'selected';
									}
								?>>Depressão</option>
				          	<option value="Ansiedade" name="psicologico" <?php
									if($dados1['psicologico']=='Ansiedade'){
										echo 'selected';
									}
								?> >Ansiedade</option>
				          	<option value="Insônia" name="psicologico" <?php
									if($dados1['psicologico']=='Insônia'){
										echo 'selected';
									}
								?>>Insônia</option>
				          	<option value="Outros" name="psicologico" <?php
									if($dados1['psicologico']=='Outros'){
										echo 'selected';
									}
								?>>Outros</option>
			         	</select>
							</div>
			      	<div class="form-group col-lg-8">
						<input type="text" name="outro_psi" value="<?=($dados1['outro_psi']);?>" class="form-control" placeholder="Outros">
					</div>
			  	  </div>
				 	</fieldset>
	 				<!--GRUPO INTERESSSES E PREFERENCIAS-->
				 	<fieldset>
			  	  <legend>Interesses e Preferências</legend>
			  	  <div class="row">
			  	    <div class="form-group col-lg-7">
			  	    	<label>Atividade Física</label><br>
				    		<label class="checkbox-inline">
			          	<input type="checkbox" value="Caminhada Orientada" name="at_fisica[]">Caminhada Orientada
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Hidroginástica" name="at_fisica[]">Hidroginástica
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Natação" name="at_fisica[]">Natação
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Ioga" name="at_fisica[]">Ioga
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Ginástica" name="at_fisica[]">Ginástica
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Outros" name="at_fisica[]">Outros
			        	</label>
			      	</div>
			  	  </div>
			  	  <hr>
			  	  <div class="row">
			  	  	 <div class="form-group col-lg-6">
			  	    	<label>Atividade Sócio-Educativas</label><br>
				    		<label class="checkbox-inline">
			          	<input type="checkbox" value="Dança" name="at_socio[]">Dança
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Coral" name="at_socio[]">Coral
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Oficinas de Artesanato" name="at_socio[]">Oficinas de Artesanato
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Teatro" name="at_socio[]">Teatro
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Outros" name="at_socio[]">Outros
			        	</label>
			        	</div>
			  	  </div>
				 	</fieldset>
				 	<input type="hidden" id="id_idoso" name="id_idoso" value="<?=($dados1['id_idoso']);?>" />	
				 	<button type="submit" name="alterar" class="btn btn-block btn-lg btn-primary">Alterar</button>
				</form>
      </div>
    </div>
    <!--RODAPÉ-->
    <?php include('config/rodape.php'); ?>
  </body>
   <?php include('config/scripts.php'); ?>
</html>