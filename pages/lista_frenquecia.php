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
        <h1>Lista de Atividades</h1>
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
                <th class="text-center">Atividades</th>
                <th class="text-center">Período</th>
                <th class="text-center">Dia da Semana</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td>Momento Reflexivo</td>
                <td>11/06/2016 - 11/06/2016</td>
                <td>Ter-Qui</td>
                <td class="text-center">
									<button type="button" class="btn btn-warning btn-sm" href="#" OnClick="return confirm ('Deseja Alterar as informações da Atividade?')" aria-label="Left Align">
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Alterar</button>
                  <button type="button" class="btn btn-danger btn-sm" href="#" OnClick="return confirm ('Confirma exclusão da Atividade?')" aria-label="Left Align">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Excluir</button>
								</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php include('config/rodape.php'); ?>
</body>
 <?php include('config/scripts.php'); ?>
</html>