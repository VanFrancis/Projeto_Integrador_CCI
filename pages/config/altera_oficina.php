<?php 
	require'conexao.php';
	require'funcoes.php';
		$id_atividade = $_POST['id_atividade'];
		$tipo_atividade = $_POST['tipo_atividade'];
		$nome = $_POST['nome'];
		$data_inicio = formata_data($_POST['data_inicio']);
		$data_fim = formata_data($_POST['data_fim']);
		$hora_inicio = $_POST['hora_inicio'];
		$hora_fim = $_POST['hora_fim'];
		$semana_string=""; 
		foreach ($_POST['dia_semanaa'] as $dia) {
			$semana_string.=$dia.',';
		}
		$semana_string = trim($semana_string, ",");
		$dia_semanaa=$semana_string;
		//die(var_dump($dia_semanaa[0]));
		$descricao = $_POST['descricao'];
		
	mysql_query("UPDATE tb_atividade SET
		tipo_atividade='".$tipo_atividade."',
		nome='".$nome."',
		data_inicio='".$data_inicio."',
		data_fim='".$data_fim."',
		hora_inicio='".$hora_inicio."',
		hora_fim='".$hora_fim."',
		dia_semanaa='".$semana_string."',
		descricao='".$descricao."'
		WHERE id_atividade =".$id_atividade) 
		or die (mysql_error());
		mysql_close($conn);
		
		header("location:../lista_oficina.php");
?>