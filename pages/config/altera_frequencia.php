<?php 
	require'conexao.php';
		$data = $_POST['data'];
		$id_idoso = $_POST['id_idoso'];
		$oficina = $_POST['oficina'];
		$id_atividade = $_POST['id_atividade'];
		$id_frequencia = $_POST['id_frequencia'];
	$query_verifica = mysql_query("SELECT * FROM tb_frequencia") or die (mysql_error());
	while ($array_veri = mysql_fetch_array($query_verifica)){
		if($array_veri['id_idoso']==$id_idoso && $array_veri['data']==$data && $array_veri['id_atividade']==$oficina){
	  		$_SESSION['msg_erro'] = "ERRO: Frequência já registrada!";
	  		header("Location:../frequencia.php");
	  		die();
	  		}
	}
	mysql_query("UPDATE tb_frequencia SET
		id_atividade='".$oficina."'
		WHERE id_frequencia =".$id_frequencia) 
		or die (mysql_error());
		mysql_close($conn);
		
		header("Location:../lista_frequencia.php");
?>