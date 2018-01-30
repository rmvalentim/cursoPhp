<?php 
	
	session_start();

	if(isset($_SESSION["chave"])){

		echo $_SESSION["chave"];
	} else {

		echo 'Sessão não definida';
	}
	
	echo session_save_path(); 

	


 ?>