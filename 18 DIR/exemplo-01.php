<?php 

$name = "images";

if (!is_dir($name)) { // É um diretório?
	
	mkdir($name); // Se não for, criei um diretório
	echo "Diretório $name criado com sucesso!";

} else {

	rmdir($name); // Remove o diretório 
	echo "Diretório $name já existe, foi removido";
}

 ?>