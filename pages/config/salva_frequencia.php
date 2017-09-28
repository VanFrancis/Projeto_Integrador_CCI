	
        <?php
        	session_start();
            include('conexao.php');
        
        	if(isset($_POST["salvar"])){
        		date_default_timezone_set('America/Porto_Velho');
        		$dataLocal = date('d/m/Y H:i:s', time());
        		
				$hora = date("H:m");
				$data = date("Y-m-d");
				$id_idoso = $_POST['id_idoso'];
				$oficina = $_POST['oficina'];
				$usuario = $_SESSION["id_usuario"];
				$query_verifica = mysql_query("SELECT * FROM tb_frequencia") or die (mysql_error());
  					while ($array_veri = mysql_fetch_array($query_verifica)){
  						if($array_veri['id_idoso']==$id_idoso && $array_veri['data']==$data && $array_veri['id_atividade']==$oficina){
  							$_SESSION['msg_erro'] = "ERRO: Frequência já registrada!";
  							header("Location:../frequencia.php");
  							die();
  						}
  					}
      					 
				if (!$conn) 
					die ("Erro de Conexão".mysql_error());
				$query = "INSERT INTO tb_frequencia (id_frequencia,data,hora,id_idoso,id_atividade,id_usuario) VALUES ('NULL', '$data','$hora','$id_idoso','$oficina','$usuario')"; 	
				if(mysql_query($query,$conn)) {
				
				//Mensagem 
				$_SESSION['msg'] = "Frequência registrada com sucesso!";
				header("Location:../frequencia.php");
				}
			}
			
		    ?>
