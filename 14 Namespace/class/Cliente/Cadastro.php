<?php 

namespace Cliente;

class Cadastro extends \Cadastro{ // \ Para voltar uma pasta

	public function registrarVenda(){
		echo "Foi registrada uma venda para o cliente " . $this->getNome(); 
	}

}


 ?>