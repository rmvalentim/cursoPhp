<?php 

require_once("config.php");

// Carrega um usuario
// $usuario = new Usuario();
// $usuario->loadById(3);
// echo $usuario;

// Carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuarios buscando pelo login
// $search = Usuario::search("Ra");
// echo json_encode($search);

// Carrega um usuário usando login e senha
//$usuario = new Usuario();
//$usuario->login("ragnar", "valhala");
//echo $usuario;

// Criando um novo usuario
//$pessoa = new Usuario("João", "Flor");
//$pessoa->insert();
//echo $pessoa;

// Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "tretaa");
//echo $usuario;

// Exclui um usuario
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();
echo $usuario;

 ?>