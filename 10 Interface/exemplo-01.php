<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
} 

class Civic implements Veiculo {

	public function acelerar($velocidade){
		echo "Acelerou até: " . $velocidade . " km/h";
	}

	public function freiar($velocidade){
		echo "Freiou até: " . $velocidade . " km/h";
	}

	public function trocarMarcha($marcha){
		echo "Engatou marcha: " . $marcha;
	}

}

$carro = new Civic();

$carro->trocarMarcha(1);
$carro->acelerar(240);
$carro->freiar(80);

 ?>