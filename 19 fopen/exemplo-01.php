<?php 

$file = fopen("log.txt", "a+"); // a+ adiciona texto no arquivo, se ele não existir, cria

fwrite($file, "Ola mundo! \r\n"); // \r = retorno  \n = nova linha

fclose($file);

echo "Arquivo criado com sucesso";


 ?>