<!DOCTYPE html>
<html>
    <head>
        <title>Salva Atividades</title>
    </head>
    <body>
        <?php
            include('conexao.php');
        
        	if(isset($_POST["cadastrar"])){
				$tipo_atividade = $_POST['tipo_atividade'];
				$nome = $_POST['nome'];
				$data_inicio = $_POST['data_inicio'];
				$data_fim = $_POST['data_fim'];
				$hora_inicio = $_POST['hora_inicio'];
				$hora_fim = $_POST['hora_fim'];
				$semana_string=" "; 
				foreach ($_POST['dia_semanaa'] as $dia) {
					$semana_string.=$dia.',';
				}
				$semana_string = trim($semana_string, ",");
				$dia_semanaa=$semana_string;
				//die(var_dump($dia_semanaa[0]));
				$descricao = $_POST['descricao'];
				
				if (!$conn) 
					die ("Erro de Conexão".mysql_error());
				$query = "INSERT INTO tb_atividade (`id_atividade`,`tipo_atividade`,`nome`,`data_inicio`,`data_fim`,`hora_inicio`,`hora_fim`,`dia_semanaa`,`descricao`) VALUES ('NULL', '$tipo_atividade','$nome','$data_inicio','$data_fim','$hora_inicio','$hora_fim','$dia_semanaa','$descricao')"; 	
				if(!mysql_query($query,$conn)) die(mysql_error());
			}
			
			if($tipo_atividade=="Oficina"){
				header("location:../lista_oficina.php");
			}
			else 
				header("location:../lista_evento.php");
		    ?>
    </body>
</html>