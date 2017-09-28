<?php 
	require'conexao.php';
	require'funcoes.php';
				$id_idoso = $_POST['id_idoso'];
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
		
	mysql_query("UPDATE tb_idoso SET
		nome='".$nome."',
		data_nascimento='".$data_nascimento."',
		sexo='".$sexo."',
		uf='".$uf."',
		cidade='".$cidade."',
		nacionalidade='".$nacionalidade."',
		cpf='".$cpf."',
		rg='".$rg."',
		emissor='".$emissor."',
		emissor='".$emissor."',
		numero='".$numero."',
		bairro='".$bairro."',
		trabalha='".$trabalha."',
		trab_onde='".$trab_onde."',
		telefone='".$telefone."',
		celular='".$celular."',
		nome_contato='".$nome_contato."',
		parentesco='".$parentesco."',
		telefone_contato='".$telefone_contato."',
		doenca='".$doenca."',
		medicacao='".$medicacao."',
		alergico='".$alergico."',
		outra_enferm='".$outra_enferm."',
		plano='".$plano."',
		plan_qual='".$plan_qual."',
		estado_civil='".$estado_civil."',
		nivel_renda='".$nivel_renda."',
		origem_renda='".$origem_renda."',
		escolaridade='".$escolaridade."',
		reside='".$reside."',
		com_reside='".$com_reside."',
		num_redentes='".$num_redentes."',
		tarefa='".$tarefa."',
		outra_tarefa='".$outra_tarefa."',
		grupo='".$grupo."',
		outro_parti='".$outro_parti."',
		psicologico='".$psicologico."',
		outro_psi='".$outro_psi."',
		at_fisica='".$at_fisica."',
		at_socio='".$at_socio."'
		
		WHERE id_idoso =".$id_idoso)
		or die (mysql_error());
		mysql_close($conn);
		
		
		header("location:../lista_cadastro.php");
?>