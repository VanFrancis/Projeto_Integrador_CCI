<?php 
	//cria uma sessao
	session_start();
	//recebe tudo q tiver no campo senha e usuario
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	require 'conexao.php';
	 ?>

<?php 
	//cria outra sessao
	//consulta no banco "Busca"
	$val = mysql_query("SELECT * FROM tb_usuario WHERE tp_usuario=1 and usuario = '".$usuario."' and senha = '".$senha."'",$conn);
	
	 // se o numeros de linhas da tabela for = 1 
	 if(mysql_num_rows($val)==1){
	 	$vale=mysql_fetch_array($val);
		
		//pegando id
		$id = $vale['id_usuario'];
	 	//cria uma location 
	
	 	$_SESSION['usuario'] = "$usuario";
	 	$_SESSION['senha'] = "$senha";
	 	$_SESSION['tipo'] = $vale['tp_usuario'];
	 	$_SESSION['idLogado'] = "$id";
	 	
	 	switch($vale['tp_usuario']){
	 		case 1: 
	 			header("location:../frequencia.php");
	 			break;
	 		default:
	 			header("location:../pages/index.php");
	 			break;
	 	}
	 }
	 else {
	 	//Mensagem de Erro
		$_SESSION['loginErro'] = "Usuário ou senha Inválido";
		//Manda o usuario para a tela de login
		header("Location:../login.php");
	 }
?>