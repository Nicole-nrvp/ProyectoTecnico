<?php
class DetalleNovedad{
	private $id;
	private $tipo;
	private $fecha;
	private $hora;
	private $id_regvisita;
	
	public function getid(){
		return $this->id;
	}

	public function setid($idetnov){
		$this->id=$idetnov;
	}



	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tip){
		$this->tipo=$tip;
	}


	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($date){
		$this->fecha=$date;
	}
	public function getHora(){
		return $this->hora;
	}

	public function setHora($time){
		$this->hora=$time;
	}
	public function getIdRegvisita(){
		return $this->id_regvisita;
	}

	public function setIdRegvisita($visita){
		$this->id_regvisita=$visita;
	}
	
	//Metodos........
		public function registrarDetalleNovedad(){

		}
		public function consultarDetalleNovedad(){

		}
		public function modificarDetalleNovedad(){

		}
		public function inhabilitarDetalleNovedad(){

		}

}
?>