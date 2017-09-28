<!DOCTYPE html>
<html>
	<head>
	<title>Exclui Cadastro</title>
	</head>
	<body>
		<?php 
			require'conexao.php';
			$id_idoso = $_POST['id_idoso'];
	
			mysql_query("DELETE FROM tb_idoso WHERE id_idoso='".$id_idoso."'");
			mysql_close($conn);
			
			//Mensagem 
				$_SESSION['msg_excluido'] = "Cadastro excluído com sucesso!";
				header("location:../lista_cadastro.php");
		

?>
	</body>

</html>