<html>
  <head>
    <?php include('config/head.php');
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
        <form role="form" action="config/salva_idoso.php" method="POST">
        	<!--GRUPO IDENTIFICAÇÃO-->
					<fieldset>
					  <legend>Identificação</legend>
						<div class="row">
							<div class="form-group col-lg-5">
								<label class="control-label" for="exampleInputEmail1">Nome Completo</label>
				        		<input class="form-control" name="nome" value="<?=($dados1['nome']);?>" type="text">
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label"  for="exampleInputPassword1">Data Nascimento</label>
				        		<input class="form-control" name="data_nascimento" type="date">
							</div>
							<div class="form-group col-lg-4">
								<label>Sexo</label>
				        <select class="form-control" required="">
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
				        <select class="form-control" required="">
				          <option value="" selected="true" disabled="disabled">Selecione...</option>
				          <option value="Católico" name ="religiao">Católico</option>
				          <option value="Evangélico" name ="religiao">Evangélico</option>
				          <option value="Protestante" name ="religiao">Protestante</option>
				          <option value="Católico" name ="religiao">Espirita</option>
				          <option value="Outra religião" name ="religiao">Outra religião</option>
				          <option value="Sem religião" name ="religiao">Sem religião</option>
				        </select>
				      </div>
						<div class="form-group col-lg-2">
							<label>UF</label>
				        <select class="form-control" required="">
				          <option value="" selected="true" disabled="disabled">Selecione...</option>
				          <option value="AC" name="uf">AC</option>
				          <option value="AL" name="uf">Al</option>
				          <option value="AP" name="uf">AP</option>
				          <option value="AM" name="uf">AM</option>
				          <option value="BA" name="uf">BA</option>
				          <option value="CE" name="uf">CE</option>
				          <option value="DF" name="uf">DF</option>
				          <option value="ES" name="uf">ES</option>
				          <option value="GO" name="uf">GO</option>
				          <option value="MA" name="uf">MA</option>
				          <option value="MT" name="uf">MT</option>
				          <option value="MS" name="uf">MS</option>
				          <option value="MG" name="uf">MG</option>
				          <option value="PA" name="uf">PA</option>
				          <option value="PB" name="uf">PB</option>
				          <option value="PE" name="uf">PE</option>
				          <option value="RJ" name="uf">RJ</option>
				          <option value="RN" name="uf">RN</option>
				          <option value="RS" name="uf">RS</option>
				          <option value="RO" name="uf">RO</option>
				          <option value="RR" name="uf">RR</option>
				          <option value="SC" name="uf">SC</option>
				          <option value="SP" name="uf">SP</option>
				          <option value="SE" name="uf">SE</option>
				          <option value="TO" name="uf">TO</option>
				        </select>
						</div>
							<div class="form-group col-lg-4">
								<label>Cidade</label>
								<input type="text" name="cidade" class="form-control"  placeholder="Cidade">
							</div>
							<div class="form-group col-lg-3">
								<label>Nacionalidade</label>
								<input type="text" name ="nacionalidade" class="form-control"  placeholder="Nacionalidade">
							</div>
					</div>
						<div class="row">
							<div class="form-group col-lg-4">
								<label>CPF</label>
								<input type="text" name="cpf" class="form-control" placeholder="000.000.000 - 00">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">RG</label>
								<input type="text" class="form-control" placeholder="RG">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Emissor</label>
								<input type="text" name ="emissor" class="form-control" placeholder="Emissor">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Endereço</label>
								<input type="text" name="endereco" class="form-control" placeholder="Endereço">
							</div>
							<div class="form-group col-lg-2">
								<label for="exampleInputEmail1">Nº</label>
								<input type="text" name="numero" class="form-control" placeholder="Numero">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Bairro</label>
								<input type="text" name="bairro" class="form-control" placeholder="Bairro">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-2">
								<label>Trabalha?</label>
								<select class="form-control" required="">
				          <option value="" selected="true" disabled="disabled">Selecione...</option>
				          <option value="Sim" name="trabalha">Sim</option>
				          <option value="Não" name="trabalha">Não</option>
				         </select>
							</div>
						  <div class="form-group col-lg-10">
				      	<label>Onde?</label>
								<input type="text" name="trab_onde" class="form-control" placeholder="Onde?">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Telefone</label>
								<input type="text" name="telefone" class="form-control" placeholder="Telefone">
							</div>
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Celular</label>
								<input type="text" name="celular" class="form-control" placeholder="Celular">
							</div>
						</div>
					</fieldset>
					<!--GRUPO CONTATO DE EMERGENCIA-->
					<fieldset>
					  <legend>Contato de Emergência</legend>
						<div class="row">
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Nome</label>
								<input type="text" name="nome_contato" class="form-control" placeholder="Nome">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Parentesco</label>
								<input type="text"name="parentesco" class="form-control" placeholder="Parentesco">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Telefone</label>
								<input type="text" name="telefone_contato" class="form-control" placeholder="Telefone">
							</div>
						</div>
	  			</fieldset>
	  			<!--GRUPO INFROMAÇÕES DE SAUDE-->
					<fieldset>
				  	<legend>Informações de Saúde</legend>
				  	<div class="row">
							<div class="form-group col-lg-12">
				    		<label class="checkbox-inline">
			          	<input type="checkbox" value="Diabetes" name="doenca[]">Diabetes
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Hipertensão" name="doenca[]">Hipertensão
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Osteoporose" name="doenca[]">Osteoporose
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Tabagista" name="doenca[]">Tabagista
			        	</label>
			      	</div>
				  	</div>
				  	<div class="row">
				  		<div class="form-group col-lg-12">
								<label for="exampleInputEmail1">Medicação de uso contínuo:</label>
								<textarea class="form-control" name="medicacao" id="des_ati" rows="5" placeholder="Medicação de uso contínuo..."></textarea>
							</div>
				  	</div>
				  	<div class="row">
				  		<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Alérgico a:</label>
								<input type="text" name="alergico" class="form-control" placeholder="Alérgia">
							</div>
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Outras Enfermidades?</label>
								<input type="text" name="outra_enferm" class="form-control" placeholder="Outras Enfermidades?">
							</div>
				  	</div>
				  	<div class="row">
				  		<div class="form-group col-lg-3">
							<label>Possui plano de saúde?</label>
							<select class="form-control">
					          	<option value="" selected="true" disabled="disabled">Selecione...</option>
					          	<option value="Sim" name="plano">Sim</option>
					          	<option value="Não" name="plano">Não</option>
				         	</select>
							</div>
						<div class="form-group col-lg-9">
			      			<label>Qual?</label>
							<input type="text" name="plan_qual" class="form-control" placeholder="Qual?">
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
			          	<option value="Casado" name="estado_civil">Casado</option>
			          	<option value="Solteiro" name="estado_civil">Solteiro</option>
			          	<option value="Viúvo" name="estado_civil">Viúvo</option>
			          	<option value="União Estável" name="estado_civil">União Estável</option>
			          	<option value="Outros" name="estado_civil">Outros</option>
			         	</select>
							</div>
							<div class="form-group col-lg-3">
								<label>Nível de Renda</label>
								<select class="form-control">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Sem Renda" name="nivel_renda">Sem Renda</option>
			          	<option value="Até 01 Sal. min" name="nivel_renda">Até 01 Sal. min</option>
			          	<option value="De 02 a 03" name="nivel_renda">De 02 a 03</option>
			          	<option value="Acima de 03" name="nivel_renda">Acima de 03</option>
			         	</select>
							</div>
							<div class="form-group col-lg-3">
								<label>Origem da Renda</label>
								<select class="form-control">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Trabalho Remunerado" name="origem_renda">Trabalho Remunerado</option>
			          	<option value="Aposentadoria" name="origem_renda">Aposentadoria</option>
			          	<option value="Pensão" name="origem_renda">Pensão</option>
			          	<option value="Benefício BPC" name="origem_renda">Benefício BPC</option>
			          	<option value="Outros" name="origem_renda">Outros</option>
			         	</select>
							</div>
							<div class="form-group col-lg-3">
								<label>Nível de Instrução</label>
								<select class="form-control">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Não Alfabetizado" name="escolaridade">Não Alfabetizado</option>
			          	<option value="Alfabetizado" name="escolaridade">Alfabetizado</option>
			          	<option value="Fundamental Incompleto" name="escolaridade">Fundamental Incompleto</option>
			          	<option value="Fundamental Completo"name="escolaridade">Fundamental Completo</option>
			          	<option value="Médio Incompleto" name="escolaridade">Médio Incompleto</option>
			          	<option value="Médio Completo" name="escolaridade">Médio Completo</option>
			          	<option value="Superior Incompleto" name="escolaridade">Superior Incompleto</option>
			          	<option value="Superior Completo" name="escolaridade">Superior Completo</option>
			         	</select>
							</div>
				  	</div>
				  	<hr>
				  	<div class="row">
				  		<div class="form-group col-lg-4">
								<label>Como Reside</label>
								<select class="form-control">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Em sua própria casa" name="reside">Em sua própria casa</option>
			          	<option value="Casa de familiares" name="reside">Casa de familiares</option>
			          	<option value="Casa de terceiros" name="reside">Casa de terceiros</option>
			          	<option value="Outros" name="reside">Outros</option>
			         	</select>
							</div>
							<div class="form-group col-lg-4">
								<label>Com quem Reside</label>
								<select class="form-control">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Só" name="com_reside">Só</option>
			          	<option value="Com companheiro" name="com_reside">Com companheiro(a)</option>
			          	<option value="Com familiares" name="com_reside">Com familiares</option>
			          	<option value="Com familiares" name="com_reside">Com terceiros</option>
			         	</select>
							</div>
						<div class="form-group col-lg-4">
			      			<label>Quantidade de pessoas</label>
							<input type="text" name="num_redentes" class="form-control" placeholder="Quantidade">
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
			          	<option value="Frequentemente" name="tarefa">Frequentemente</option>
			          	<option value="Raramente" name="tarefa">Raramente</option>
			          	<option value="Nunca" name="tarefa">Nunca</option>
			         	</select>
							</div>
							<div class="form-group col-lg-6">
			      		<label>Quais as tarefas executadas?</label>
								<input type="text" name="outra_tarefa" class="form-control" placeholder="Quais as tarefas executadas?">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<label>Participa de outro Grupo ou Associação?</label>
								<select class="form-control" >
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Sim" name="grupo">Sim</option>
			          	<option value="Não" name="grupo">Não</option>
			         	</select>
							</div>
							<div class="form-group col-lg-6">
			      		<label>Qual?</label>
								<input type="text" name="outro_parti" class="form-control" placeholder="Outros">
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
				          	<option value="Depressão" name="psicologico">Depressão</option>
				          	<option value="Ansiedade" name="psicologico">Ansiedade</option>
				          	<option value="Insônia" name="psicologico">Insônia</option>
				          	<option value="Outros" name="psicologico">Outros</option>
			         	</select>
							</div>
			      	<div class="form-group col-lg-8">
						<input type="text" name="outro_psi" class="form-control" placeholder="Outros">
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
				 	<input type="hidden" id="id_idoso" name="id_usuario" value="<?=($dados1['id_idoso']);?>" />	
				 	<button type="submit" name="alterar" class="btn btn-block btn-lg btn-primary">Alterar</button>
				</form>
      </div>
    </div>
    <!--RODAPÉ-->
    <?php include('config/rodape.php'); ?>
  </body>
   <?php include('config/scripts.php'); ?>
</html>