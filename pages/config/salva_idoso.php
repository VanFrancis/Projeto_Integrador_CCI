<!DOCTYPE html>
<html>
    <head>
        <title>Salva Idoso</title>
    </head>
    <body>
        <?php
            include('conexao.php');
        
        	if(isset($_POST["cadastrar"])){
				$nome = $_POST['nome'];
				$data_nascimento = $_POST['data_nascimento'];
				$sexo = $_POST['sexo'];
				$religiao=$_POST['religiao'];
				$uf=$_POST['uf'];
				$cidade=$_POST['cidade'];
				$nacionalidade = $_POST['nacionalidade'];
				$cpf = $_POST['cpf'];
				$rg =$_POST['rg'];
				$emissor=$_POST['emissor'];
				$endereco = $_POST['endereco'];
				$numero=$_POST['numero'];
				$bairro=$_POST['bairro'];
				$trabalha = $_POST['trabalha'];
				$trab_onde = $_POST['trab_onde'];
				$telefone = $_POST['telefone'];
				$celular = $_POST['celular'];
				/*Contato de Emergencia*/
				$nome_contato = $_POST['nome_contato'];
				$parentesco=$_POST['parentesco'];
				$telefone_contato = $_POST['telefone_contato'];
				/*Informações saúde*/
				$doenca_string="";
				if($_POST['doenca']){
					foreach ($_POST['doenca'] as $item) {
					$doenca_string.=$item.',';
					}
				$doenca_string = trim($doenca_string, ",");
				$doenca=$doenca_string;
				}
				$medicacao=$_POST['medicacao'];
				$alergico=$_POST['alergico'];
				$outra_enferm=$_POST['outra_enferm'];
				$plano=$_POST['plano'];
				$plan_qual=$_POST['plan_qual'];
				/*Informações Adicionais*/
				$estado_civil = $_POST['estado_civil'];
				$nivel_renda= $_POST['nivel_renda'];
				$origem_renda = $_POST['origem_renda'];
				$escolaridade = $_POST['escolaridade'];
				$reside = $_POST['reside'];
				$com_reside = $_POST['com_reside'];
				$num_redentes = $_POST['num_redentes'];
				/*Participação Familiar*/
				$tarefa= $_POST['tarefa'];
				$outra_tarefa=$_POST['outra_tarefa'];
				$grupo=$_POST['grupo'];
				$outro_parti = $_POST['outro_parti'];
				/*Aspectos psicologicos*/
				$psicologico = $_POST['psicologico'];
				$outro_psi =$_POST['outro_psi'];
				
				/*Interesses e prefenrencias*/
				$fisica_string="";
				if($_POST['at_fisica']){
				foreach ($_POST['at_fisica'] as $fisica) {
					$fisica_string.=$fisica.',';
					}
				}
				$fisica_string = trim($fisica_string, ",");
				$at_fisica=$doenca_string;
				$socio_string="";
				if($_POST['at_socio']){
				foreach ($_POST['at_socio'] as $socio) {
					$socio_string.=$socio.',';
					}
				}
				$socio_string = trim($socio_string, ",");
				$at_socio = $socio_string;
				
			if (!$conn) 
				die ("Erro de Conexão".mysql_error());
				$query = "INSERT INTO tb_idoso 
				(id_idoso,nome,data_nascimento,sexo,religiao,uf,cidade,nacionalidade,
				cpf,rg,emissor,endereco,numero,bairro,trabalha,trab_onde,telefone,
				celular,nome_contato,parentesco,telefone_contato,doenca,medicacao,alergico,
				outra_enferm,plano,plan_qual,estado_civil,nivel_renda,origem_renda,escolaridade,
				reside,com_reside,num_redentes,tarefa,outra_tarefa,grupo,outro_parti,psicologico,
				outro_psi,at_fisica,at_socio) VALUES ('NULL', '$nome','$data_nascimento','$sexo',
				'$religiao', '$uf','$cidade','$nacionalidade','$cpf','$rg','$emissor','$endereco','$numero','$bairro','$trabalha',
				'$trab_onde','$telefone','$celular','$nome_contato','$parentesco','$telefone_contato','$doenca',
				'$medicacao','$alergico','$outra_enferm','$plano','$plan_qual','$estado_civil','$nivel_renda',
				'$origem_renda','$escolaridade','$reside','$com_reside','$num_redentes','$tarefa','$outra_tarefa','$grupo',
				'$outro_parti','$psicologico','$outro_psi','$at_fisica','$at_socio')"; 	
				if(!mysql_query($query,$conn)) die(mysql_error());
			}
				header("Location:../lista_cadastro.php");
		    ?>
    </body>
</html>