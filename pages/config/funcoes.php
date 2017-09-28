<?php
	// funcao que organiza data-dia no bot�o
	function organiza_dias_botao ($string) 
	{
	   $dias = array();
	   $dias = explode(',', strtolower($string)); 
	   $temp = "";
	   $seg ="false"; $ter ="false"; $qua ="false"; $qui ="false"; $sex ="false"; $sab ="false"; 
	   // loop
	   foreach ($dias as $dia) {
	      switch ($dia) {
			case "seg": $seg = "true"; break;
			case "ter": $ter = "true"; break;
			case "qua": $qua = "true"; break;
			case "qui": $qui = "true"; break;
			case "sex": $sex = "true"; break;
			case "sab": $sab = "true"; break;
		  }
	   }
	   $temp = 'data-seg="'.trim($seg).'" data-ter="'. trim($ter).'" data-qua="'. trim($qua).'" data-qui="'. trim($qui).'" data-sex="'. trim($sex).'" data-sab="'. trim($sab). '"'; 
	   return $temp; 
   }
   
   function formata_data ($string) {
   
   $temp = explode("/", $string);
   $resultado = $temp[2] . '-' . $temp[1] . '-' . $temp[0];
   return $resultado;
   }
   
   //function formata_data_novo ($string) {
   
   //$temp = explode("/", $string);
   //$resultado = $temp[2] . '-' . $temp[1] . '-' . $temp[0];
   //return $resultado;
   //}
?>