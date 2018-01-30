<?php 

abstract class Animal {

	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Anda";
	}
}

class Cachorro extends Animal {

	public function falar(){
		return "Late";
	}

}

class Gato extends Animal {

	public function falar(){
		return "Mia";
	}

}

class Passaro extends Animal {

	public function falar(){
		return "Canta";
	}

	public function mover(){
		return "Voa e " . parent::mover(); //parent chama o método da classe pai (Igual o super do Java)
	}

}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "-------------------------<br/>";

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "-------------------------<br/>";

$piupiu = new Passaro();

echo $piupiu->falar() . "<br/>";
echo $piupiu->mover() . "<br/>";


 ?>