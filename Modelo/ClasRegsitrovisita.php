<?php
class RegsitroVisita{
	private $id;
	private $id_visitante;
	private $id_apartamento;
	


	public function getId(){
		return $this->id;
	}

	public function setId($idresgivisi){
		$this->id=$idresgivisi;
	}

	public function getIdVisitante(){
		return $this->id_visitante;
	}

	public function setIdVisitante($idvisi){
		$this->id_visitante=$idvisi;
	}


	public function getIdApartamento(){
		return $this->id_apartamento;
	}

	public function setIdApartamento($idapar){
		$this->id_apartamento=$idapar;
	}
	
	
	//Metodos........
		public function registrarRegsitroVisita(){

		}
		public function consultarRegsitroVisita(){

		}
		public function modificarRegsitroVisita(){

		}
		public function inhabilitarRegsitroVisita(){

		}

}
?>