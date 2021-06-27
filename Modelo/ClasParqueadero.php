<?php

require_once('conexionBase.php');
class Parqueadero extends conexion{
	private $id;
	private $tipo;
	private $uso;
	private $estado;
	private $id_usuario;
	private $placa_vehiculo;

	public function __construct(){
		$this->conjunto_residencial = parent::__construct();
	}

	public function getId(){
		return $this->id;
	}

	public function setId($idaparquea){
		$this->id=$idaparquea;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tip){
		$this->tipo=$tip;
	}


	public function getUso(){
		return $this->uso;
	}

	public function setUso($usopar){
		$this->uso=$usopar;
	}
	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($state){
		$this->estado=$state;
	}
	public function getId_usuario(){
		return $this->id_usuario;
	}

	public function setId_usuario($idusua){
		$this->id_usuario=$idusua;
	}
	public function getPlacaVehiculo(){
		return $this->placa_vehiculo;
	}

	public function setPlacaVehiculo($placvehiculo){
		$this->placa_vehiculo=$placvehiculo;
	}

	//Metodos........
		public function registrarParqueadero(){

		}
		public function consultarParqueadero(){

		}
		public function modificarParqueadero(){

		}
		public function inhabilitarParqueadero(){

		}

		//Metodos-------------------------
		public function login(){
			
			// duda  preguntar profe

			 $consulta=$this->conjunto_residencial->prepare("SELECT * FROM usuario WHERE nombres_usuario=:Nombres and contraseña_usuario= :Clave");
			$consulta->bindParam(':Nombres',$this->nombres);
			$consulta->bindParam(':Clave', $this->clave);
			$consulta->execute();
			if ($consulta->rowCount()==1) {
				return true;

			}else{
				return false;
			} 
		}

		public function consultarTodos(){
		$filas=null;
		$consulta=$this->conjunto_residencial->prepare("SELECT * FROM Parqueadero limit 5");
		$consulta->execute();
		while($resultado= $consulta->fetch()){
			$filas[]=$resultado;

			}
			return $filas;

		}
}
?>

