<?php 
	
	$nomeCompleto = "Rafael Valentim";

	echo $nomeCompleto;

	echo "<br>";

	echo "limpou";

	// Limpa a variavel
	unset($nomeCompleto);

	echo "<br>";

	// Se a variavel estiver setada, imprime ela.
	if (isset($n)) {
		echo $nomeCompleto;
	}
	
	/////////////////////////////////

	// Concatenação

	$nome = "Rafael";
	$sobrenome = "Valentim";


	$nomeCompleto = $nome . " " . $sobrenome;

	echo "<br>";

	echo $nomeCompleto;




 ?>