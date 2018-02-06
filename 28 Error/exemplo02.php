<?php 

// Desabilitando exibição de notices via código

error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

 ?>