<?php 

	class Carro{

		private $modelo;
		private $motor;
		private $ano;

		//Getters e Setters

		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($modelo){
			$this->modelo = $modelo;
		}

		public function getMotor(){
			return $this->motor;
		}

		public function setMotor($motor){
			$this->motor = $motor;
		}

		public function getAno(){
			return $this->ano;
		}

		public function setAno($ano){
			$this->ano = $ano;
		}

		public function exibir(){

			return array(
				"modelo"=>$this->getModelo(),
				"motor"=>$this->getMotor(),
				"ano"=>$this->getAno()
			);
		}
	}

	$objCarro = new Carro();
	$objCarro->setModelo("Gol");
	$objCarro->setMotor("1.6");
	$objCarro->setAno(2008);

	print_r( $objCarro->exibir() );

	echo "<br>";

	var_dump( $objCarro->exibir() );

 ?>