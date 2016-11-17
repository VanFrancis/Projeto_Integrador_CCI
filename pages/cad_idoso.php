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
            <h1>Novo Cadastro</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <form role="form">
        	<!--GRUPO IDENTIFICAÇÃO-->
					<fieldset>
					  <legend>Identificação</legend>
						<div class="row">
							<div class="form-group col-lg-5">
								<label class="control-label" for="exampleInputEmail1">Nome Completo</label>
				        <input class="form-control" name="nome" placeholder="Nome Completo" type="text">
							</div>
							<div class="form-group col-lg-3">
								<label class="control-label"  for="exampleInputPassword1">Data Nascimento</label>
				        <input class="form-control" name="data_nascimento" type="date">
							</div>
							<div class="form-group col-lg-4">
								<label>Sexo</label>
				        <select class="form-control" required="">
				          <option value="" selected="true" disabled="disabled">Selecione...</option>
				          <option value="Feminino">Feminino</option>
				          <option value="Masculino">Masculino</option>
				        </select>
							</div>
						</div>	<!--FIM LINHA-->
						<div class="row">
							<div class="form-group col-lg-4">
				        <label>Religião</label>
				        <select class="form-control" required="">
				          <option value="" selected="true" disabled="disabled">Selecione...</option>
				          <option value="Católico">Católico</option>
				          <option value="Evangélico">Evangélico</option>
				          <option value="Protestante">Protestante</option>
				          <option value="Católico">Espirita</option>
				          <option value="Outra religião">Outra religião</option>
				          <option value="Sem religião">Sem religião</option>
				        </select>
				      </div>
							<div class="form-group col-lg-4">
								<label>UF</label>
				        <select class="form-control" required="">
				          <option value="" selected="true" disabled="disabled">Selecione...</option>
				          <option value="AC">AC</option>
				          <option value="AL">Al</option>
				          <option value="AP">AP</option>
				          <option value="AM">AM</option>
				          <option value="BA">BA</option>
				          <option value="CE">CE</option>
				          <option value="DF">DF</option>
				          <option value="ES">ES</option>
				          <option value="GO">GO</option>
				          <option value="MA">MA</option>
				          <option value="MT">MT</option>
				          <option value="MS">MS</option>
				          <option value="MG">MG</option>
				          <option value="PA">PA</option>
				          <option value="PB">PB</option>
				          <option value="PE">PE</option>
				          <option value="RJ">RJ</option>
				          <option value="RN">RN</option>
				          <option value="RS">RS</option>
				          <option value="RO">RO</option>
				          <option value="RR">RR</option>
				          <option value="SC">SC</option>
				          <option value="SP">SP</option>
				          <option value="SE">SE</option>
				          <option value="TO">TO</option>
				        </select>
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Nacionalidade</label>
								<input type="text" class="form-control"  placeholder="Nacionalidade">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">CPF</label>
								<input type="text" class="form-control" placeholder="000.000.000 - 00">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">RG</label>
								<input type="text" class="form-control" placeholder="RG">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Emissor</label>
								<input type="text" class="form-control" placeholder="Emissor">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Endereço</label>
								<input type="text" class="form-control" placeholder="Endereço">
							</div>
							<div class="form-group col-lg-2">
								<label for="exampleInputEmail1">Nº</label>
								<input type="text" class="form-control" placeholder="Numero">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Bairro</label>
								<input type="text" class="form-control" placeholder="Bairro">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-2">
								<label>Trabalha?</label>
								<select class="form-control" required="">
				          <option value="" selected="true" disabled="disabled">Selecione...</option>
				          <option value="Sim">Sim</option>
				          <option value="Não">Não</option>
				         </select>
							</div>
						  <div class="form-group col-lg-10">
				      	<label>Deixar Invisivel</label>
								<input type="text" class="form-control" placeholder="Onde?">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Telefone</label>
								<input type="text" class="form-control" placeholder="Telefone">
							</div>
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Celular</label>
								<input type="text" class="form-control" placeholder="Celular">
							</div>
						</div>
					</fieldset>
					<!--GRUPO CONTATO DE EMERGENCIA-->
					<fieldset>
					  <legend>Contato de Emergência</legend>
						<div class="row">
				  	  <div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Nome</label>
								<input type="text" class="form-control" placeholder="Nome">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Parentesco</label>
								<input type="text" class="form-control" placeholder="Parentesco">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Telefone</label>
								<input type="text" class="form-control" placeholder="Telefone">
							</div>
						</div>
						<div class="row">
				  	  <div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Nome</label>
								<input type="text" class="form-control" placeholder="Nome">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Parentesco</label>
								<input type="text" class="form-control" placeholder="Parentesco">
							</div>
							<div class="form-group col-lg-4">
								<label for="exampleInputEmail1">Telefone</label>
								<input type="text" class="form-control" placeholder="Telefone">
							</div>
						</div>
	  			</fieldset>
	  			<!--GRUPO INFROMAÇÕES DE SAUDE-->
					<fieldset>
				  	<legend>Informações de Saúde</legend>
				  	<div class="row">
							<div class="form-group col-lg-12">
				    		<label class="checkbox-inline">
			          	<input type="checkbox" value="Diabetes" name="tipo_ati">Diabetes
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Hipertensão" name="tipo_ati">Hipertensão
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Osteoporose" name="tipo_ati">Osteoporose
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Tabagista" name="tipo_ati">Tabagista
			        	</label>
			      	</div>
				  	</div>
				  	<div class="row">
				  		<div class="form-group col-lg-12">
								<label for="exampleInputEmail1">Medicação de uso contínuo:</label>
								<textarea class="form-control" name="descricao" id="des_ati" rows="5" placeholder="Medicação de uso contínuo..."></textarea>
							</div>
				  	</div>
				  	<div class="row">
				  		<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Alérgico a:</label>
								<input type="text" class="form-control" placeholder="Alérgia">
							</div>
							<div class="form-group col-lg-6">
								<label for="exampleInputEmail1">Outras Enfermidades?</label>
								<input type="text" class="form-control" placeholder="Outras Enfermidades?">
							</div>
				  	</div>
				  	<div class="row">
				  		<div class="form-group col-lg-3">
								<label>Possui plano de saúde?</label>
								<select class="form-control" required="">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Sim">Sim</option>
			          	<option value="Não">Não</option>
			         	</select>
							</div>
							<div class="form-group col-lg-9">
			      		<label>Deixar Invisivel</label>
								<input type="text" class="form-control" placeholder="Onde?">
							</div>
				  	</div>
				  </fieldset>
				  <!--GRUPO INFORMAÇÕES ADICIONAIS-->
					<fieldset>
				  	<legend>Informações Adicionais</legend>
				  	<div class="row">
				    	<div class="form-group col-lg-3">
								<label>Estado Civil</label>
								<select class="form-control" required="">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Casado">Casado</option>
			          	<option value="Solteiro">Solteiro</option>
			          	<option value="Viúvo">Viúvo</option>
			          	<option value="União Estável">União Estável</option>
			          	<option value="Outros">Outros</option>
			         	</select>
							</div>
							<div class="form-group col-lg-3">
								<label>Nível de Renda</label>
								<select class="form-control" required="">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Sem Renda">Sem Renda</option>
			          	<option value="Até 01 Sal. min">Até 01 Sal. min</option>
			          	<option value="De 02 a 03">De 02 a 03</option>
			          	<option value="Acima de 03">Acima de 03</option>
			         	</select>
							</div>
							<div class="form-group col-lg-3">
								<label>Origem da Renda</label>
								<select class="form-control" required="">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Trabalho Remunerado">Trabalho Remunerado</option>
			          	<option value="Aposentadoria">Aposentadoria</option>
			          	<option value="Pensão">Pensão</option>
			          	<option value="Benefício BPC">Benefício BPC</option>
			          	<option value="Outros">Outros</option>
			         	</select>
							</div>
							<div class="form-group col-lg-3">
								<label>Nível de Instrução</label>
								<select class="form-control" required="">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Não Alfabetizado">Não Alfabetizado</option>
			          	<option value="Alfabetizado">Alfabetizado</option>
			          	<option value="Fundamental Incompleto">Fundamental Incompleto</option>
			          	<option value="Fundamental Completo">Fundamental Completo</option>
			          	<option value="Médio Incompleto">Médio Incompleto</option>
			          	<option value="Médio Completo">Médio Completo</option>
			          	<option value="Superior Incompleto">Superior Incompleto</option>
			          	<option value="Superior Completo">Superior Completo</option>
			         	</select>
							</div>
				  	</div>
				  	<hr>
				  	<div class="row">
				  		<div class="form-group col-lg-3">
								<label>Como Reside</label>
								<select class="form-control" required="">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Em sua própria casa">Em sua própria casa</option>
			          	<option value="Casa de familiares">Casa de familiares</option>
			          	<option value="Casa de terceiros">Casa de terceiros</option>
			          	<option value="Outros">Outros</option>
			         	</select>
							</div>
							<div class="form-group col-lg-6">
			      		<label>Deixar Invisivel</label>
								<input type="text" class="form-control" placeholder="Outros">
							</div>
							<div class="form-group col-lg-3">
								<label>Com quem Reside</label>
								<select class="form-control" required="">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Só">Só</option>
			          	<option value="Com companheiro">Com companheiro(a)</option>
			          	<option value="Com familiares">Com familiares</option>
			          	<option value="Com familiares">Com terceiros</option>
			         	</select>
							</div>
				  	</div>
				  	<hr>
				  	<div class="row">
				  		<div class="form-group col-lg-2">
			      		<label>Crianças</label>
								<input type="text" class="form-control" placeholder="Crianças">
							</div>
							<div class="form-group col-lg-3">
			      		<label>Adolescente</label>
								<input type="text" class="form-control" placeholder="Adolescente">
							</div>
							<div class="form-group col-lg-3">
			      		<label>Adulto</label>
								<input type="text" class="form-control" placeholder="Adulto">
							</div>
							<div class="form-group col-lg-2">
			      		<label>Idoso</label>
								<input type="text" class="form-control" placeholder="Idoso">
							</div>
							<div class="form-group col-lg-2">
			      		<label>Total</label>
								<input type="text" class="form-control" placeholder="Total">
							</div>
				  	</div>
				  </fieldset>
				  <!--GRUPO PARTICIPAÇÃO DA VIDA FAMILIAR E SOCIAL-->
					<fieldset>
				  	<legend>Participação da Vida Familiar e Social</legend>
				  	<div class="row">
				    	<div class="form-group col-lg-6">
								<label>Participar das atividades domésticas?</label>
								<select class="form-control" required="">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Frequentemente">Frequentemente</option>
			          	<option value="Raramente">Raramente</option>
			          	<option value="Nunca">Nunca</option>
			         	</select>
							</div>
							<div class="form-group col-lg-6">
			      		<label>Quais as tarefas executadas?</label>
								<input type="text" class="form-control" placeholder="Quais as tarefas executadas?">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6">
								<label>Participa de outro Grupo ou Associação?</label>
								<select class="form-control" required="">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Sim">Sim</option>
			          	<option value="Não">Não</option>
			         	</select>
							</div>
							<div class="form-group col-lg-6">
			      		<label>Deixar Invisivel</label>
								<input type="text" class="form-control" placeholder="Outros">
							</div>
				  	</div>
				 	</fieldset>
				 	<!--GRUPO ASPECTOS PSICOLOGICOS-->
				 	<fieldset>
			  	  <legend>Aspectos Psicológicos</legend>
			  	  <div class="row">
			  	    <div class="form-group col-lg-4">
								<select class="form-control" required="">
			          	<option value="" selected="true" disabled="disabled">Selecione...</option>
			          	<option value="Depressão">Depressão</option>
			          	<option value="Ansiedade">Ansiedade</option>
			          	<option value="Insônia">Insônia</option>
			          	<option value="Outros">Outros</option>
			         	</select>
							</div>
			      	<div class="form-group col-lg-8">
								<input type="text" class="form-control" placeholder="Outros">
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
			          	<input type="checkbox" value="Caminhada Orientada" name="tipo_ati">Caminhada Orientada
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Hidroginástica" name="tipo_ati">Hidroginástica
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Natação" name="tipo_ati">Natação
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Ioga" name="tipo_ati">Ioga
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Ginástica" name="tipo_ati">Ginástica
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Outros" name="tipo_ati">Outros
			        	</label>
			      	</div>
			      	<div class="form-group col-lg-5">
			      		<br>
								<input type="text" class="form-control" placeholder="Outros">
							</div>
			  	  </div>
			  	  <hr>
			  	  <div class="row">
			  	  	 <div class="form-group col-lg-6">
			  	    	<label>Atividade Sócio-Educativas</label><br>
				    		<label class="checkbox-inline">
			          	<input type="checkbox" value="Dança" name="tipo_ati">Dança
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Coral" name="tipo_ati">Coral
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Oficinas de Artesanato" name="tipo_ati">Oficinas de Artesanato
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Teatro" name="tipo_ati">Teatro
			        	</label>
			        	<label class="checkbox-inline">
			          	<input type="checkbox" value="Outros" name="tipo_ati">Outros
			        	</label>
			        	</div>
			      	<div class="form-group col-lg-6">
			      		<br>
								<input type="text" class="form-control" placeholder="Outros">
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