
		<?php 
	require'conexao.php';
	$id_frequencia = $_POST['id_frequencia'];
	
		mysql_query("DELETE FROM tb_frequencia WHERE id_frequencia='".$id_frequencia."'");
		mysql_close($conn);
		
		header("location:../lista_frequencia.php");
		
//	}
?>
