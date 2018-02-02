<?php 

if (isset($_COOKIE["NOME_DO_COOKIE"])) {
	
	$data = json_decode($_COOKIE["NOME_DO_COOKIE"]); // sem o true pra gerar objeto

	echo $data->empresa;
}

 ?>