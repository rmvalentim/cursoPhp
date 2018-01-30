<?php 

	class Pessoa{

		public $nome;

		public function falar(){

			return "Meu nome é " . $this->nome;
		}

	}

	$objPessoa = new Pessoa();

	$objPessoa->nome = "Rafael Valentim";

	echo $objPessoa->falar();


 ?>