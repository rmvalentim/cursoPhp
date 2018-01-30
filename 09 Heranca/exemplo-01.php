<?php 

class Documento {

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($num){
		$this->numero = $num;
	}
}

class Cpf extends Documento {

	public function validar(){
		// Validação do CPF

		return true;
	}
}

$doc = new Cpf();

$doc->setNumero("123123123-12");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();

 ?>