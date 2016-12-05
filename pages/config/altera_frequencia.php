<?php 
	require'conexao.php';
		//$id_idoso = $_POST['id_idoso'];
		$oficina = $_POST['oficina'];
		$id_frequencia = $_POST['id_frequencia'];

	mysql_query("UPDATE tb_frequencia SET
		id_atividade='".$oficina."'
		WHERE id_frequencia =".$id_frequencia) 
		or die (mysql_error());
		mysql_close($conn);
		
		header("Location:../lista_frequencia.php");
?>