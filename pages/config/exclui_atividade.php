<!DOCTYPE html>
<html>
	<head>
	<title>Exlui Atividade</title>
	</head>
	<body>
	<?php 
	$conn = mysql_connect("localhost","root","") or die("ERRO FUUUUH!");
	mysql_select_db("dbcci");
	$exc = $_POST['excluir'];
	$tipo = $_GET['tipo_atividade'];
	if(isset($exc)){
		$id = $_GET['id'];
		echo $id;
		mysql_query("DELETE FROM tb_atividade WHERE id_atividade='".$id."'");
		mysql_close($conn);
	}
		header("location:lista_envento.php");
?>
	</body>

</html>