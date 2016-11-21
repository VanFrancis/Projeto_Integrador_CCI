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
				$sexo = $_POST['sexo'];
				$data_nascimento = $_POST['data_nascimento'];
				$nacionalidade = $_POST['nacionalidade'];
				$cpf = $_POST['cpf'];
				$trabalha = $_POST['trabalha'];
				$telefone = $_POST['telefone'];
				$estado_civil = $_POST['estado_civil'];
				$endereco = $_POST['endereco'];
				$numero=$_POST['numero'];
				$bairro=$_POST['bairro'];
				$cep=$_POST['cep'];
				$cidade=$_POST['cidade'];
				$uf=$_POST['uf'];
				
				if (!$conn) 
					die ("Erro de Conexão".mysql_error());
				$query = "INSERT INTO tb_idoso (`id_idoso`,`nome`,`sexo`,`nacionalidade`,`cpf`,`emissor`,`trabalha`,`telefone`,`estado_civil`,`endereco`,`numero`,`bairro`,`cep`,`cidade`,`uf`) VALUES ('NULL', '$nome','$nome','$sexo','$data_nascimento','$nacionalidade','$cpf','$trabalha','$telefone','$estado_civil','$endereco','$numero','$bairro','$cep','$cidade','$uf')"; 	
				if(!mysql_query($query,$conn)) die(mysql_error());
			}
			
			if($tipo_atividade=="Oficina"){
				header("location:../lista_.php");
			}
			else 
				header("location:../lista_evento.php");
		    ?>
    </body>
</html>