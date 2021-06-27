<?php  


	class conexion{
		private $server='localhost';
		private $user='root';
		private $password='';
		private $database='conjunto_residencial';

		public function __construct(){
			try{
	$connet= new PDO("mysql:host=".$this->server.";dbname=".$this->database,$this->user,$this->password);
			return $connet;

			}catch(PDOExepcion $error){
				return "Error al conectarse: ".$error;

			}

		}	

	}

?> 