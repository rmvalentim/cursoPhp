<?php 

$data = array(
	"empresa"=>"Google"
);

// Ultimo parametro é o tempo em segundos
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600); 

echo "Cookie criado!";

 ?>