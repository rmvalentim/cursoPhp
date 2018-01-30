<?php 


interface Veiculo {

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
} 

abstract class Automovel implements Veiculo {

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

class Corsa extends Automovel {

	public function empurrar(){
		echo "Empurrando...";
	}
}

// $carro = new Automovel(); ERRO - Classes abstratas não são instanciadas

$carro = new Corsa();

$carro->acelerar(240);


 ?>