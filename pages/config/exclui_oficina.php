<!DOCTYPE html>
<html>
	<head>
	<title>Exclui Atividade</title>
	</head>
	<body>
		<?php 
	require'conexao.php';
	$id_atividade = $_POST['id_atividade'];
	
		mysql_query("DELETE FROM tb_atividade WHERE id_atividade='".$id_atividade."'");
		mysql_close($conn);
		
		header("location:../lista_oficina.php");
		
//	}
?>
	</body>

</html>