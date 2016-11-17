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
            <h1>Cadastrar Nova Atividade</h1>
          </div>
          
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="col-md-12 ">
          <form role="form" action="config/salva_atividade.php" method="post">
            <div class="form-group">
              <label for="basic-url">Tipo de Atividade</label>
              <div class="form-group required">
                <label class="radio-inline">
                  <input type="radio" value="Evento" name="tipo_atividade">Evento
                </label>
                <label class="radio-inline">
                  <input type="radio" value="Oficina" name="tipo_atividade" required>Oficina
                </label>
              </div>
              <div class="form-group">
                <label class="control-label" for="nome_ati">Nome da Atividade</label>
                <input class="form-control" name="nome" placeholder="Nome da Atividade" type="text"oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Nome da Atividade')" required />
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
    						    	<input type="checkbox"  value="Seg" name="dia_semanaa[]">Segunda-Feira
    						    </label>
    						    <label class="checkbox-inline">
    						      	<input type="checkbox" value="Ter" name="dia_semanaa[]">Terça-Feira
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
                  <textarea class="form-control" name='descricao' id="des_ati" rows="5" placeholder="Deixe um breve comentário sobre a atividade..." oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Preencha o campo Descrição da Atividade')" required /></textarea>
                </div>
              <button type="submit" name="cadastrar" class="btn btn-block btn-lg btn-primary">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include('config/rodape.php'); ?>
  </body>
 <?php include('config/scripts.php'); ?>
</html>