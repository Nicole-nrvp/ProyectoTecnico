<?php
class Apartamento{
	private $id;
	private $interior;
	private $numero;
	private $id_usuario;
	


	public function getId(){
		return $this->id;
	}

	public function setId($idapart){
		$this->id=$idapart;
	}

	public function getInterior(){
		return $this->interior;
	}

	public function setInterior($inte){
		$this->interior=$inte;
	}


	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($number){
		$this->numero=$number;
	}
	
	public function getId_usuario(){
		return $this->id_usuario;
	}

	public function setId_usuario($idusua){
		$this->id_usuario=$idusua;
	}

	//Metodos........
		public function registrarApartamento(){

		}
		public function consultarApartamento(){

		}
		public function modificarApartamento(){

		}
		public function inhabilitarApartamento(){

		}

}
?>