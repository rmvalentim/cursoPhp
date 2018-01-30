<?php 
	
	// Tipos Basicos
	$texto = "Ola Mundo"; // String
	$inteiro = 1990; // Int
	$pontoFlutuante = 5500.99; //Float

	////////////////////////////////////

	// Tipos Compostos

	// Array
	$vetor = array("manga", "abacaxi", "uva");
	echo $vetor[2]; // Para chamar na posição



	echo "<br>";

	// Object
	$objNasciimento = new DateTime();

	var_dump($objNasciimento);

	// Tipos Especiais

	// Resource

	$arquivo = fopen("exemplo-03.php", "r");

	echo "<br>";

	var_dump($arquivo);

	// Null

	$nulo = null;











 ?>