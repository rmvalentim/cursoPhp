<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Rafael Valentim");
$cad->setEmail("rafael@gmail.com");
$cad->setSenha("123456");

//echo $cad;

$cad->registrarVenda();

 ?>