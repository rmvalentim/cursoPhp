<?php 

	// Escopos
	
	$nome = "Rafa";

	function teste(){

		global $nome;	// recebe a variavl de fora da função 
		echo $nome;
	}

	teste();
 ?>