<?php 

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}
}

$obj = new Pessoa();

//echo $obj->nome . "<br/>"; // Public, exibe
//echo $obj->idade . "<br/>"; // Protected não exibe
//echo $obj->senha . "<br/>"; // Private não exibe

$obj->verDados();


 ?>