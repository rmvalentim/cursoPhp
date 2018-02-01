<?php 

$file = fopen("teste.txt", "w+"); // Cria

fclose($file);

unlink("teste.txt"); // Apaga

echo "Arquivo removido com sucesso!";

 ?>