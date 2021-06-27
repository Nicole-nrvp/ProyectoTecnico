<?php
require_once('conexionBase.php');
class Vehiculo extends conexion{
	private $placa;
	private $tipo;
	private $marca;
	private $modelo;
	private $color;
	private $linea;
	private $cilindraje;

	public function __construct(){
		$this->conjunto_residencial = parent::__construct();
	}

	public function getPlaca(){
		return $this->placa;
	}

	public function setPlaca($placvehiculo){
		$this->placa=$placvehiculo;
	}


	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tip){
		$this->tipo=$tip;
	}


	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marc){
		$this->marca=$marc;
	}
	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($mode){
		$this->modelo=$mode;
	}
	public function getColor(){
		return $this->color;
	}

	public function setColor($colour){
		$this->color=$colour;
	}
	public function getLinea(){
		return $this->linea;
	}

	public function setLinea($line){
		$this->linea=$line;
	}
	public function getCilindraje(){
		return $this->cilindraje;
	}

	public function setCilindraje($cili){
		$this->cilindraje=$cili;
	}
	//Metodos........
		
		
		public function modificarVehiculo(){

		}
		public function inhabilitarVehiculo(){

		}

		//Metodos-------------------------
		 public function consultarTodos(){
		$filas=null;
		$consulta=$this->conjunto_residencial->prepare("SELECT * FROM Vehiculo limit 7");
		$consulta->execute();
		while($resultado= $consulta->fetch()){
			$filas[]=$resultado;

			}
			return $filas;

		}


		 public function registrarVehiculo(){

		 	$consulta=$this->conjunto_residencial->prepare("INSERT INTO vehiculo (placa_vehiculo, tipo_vehiculo, marca_vehiculo, modelo_vehiculo, color_vehiculo, linea_vehiculo, cilindraje_vehiculo) VALUES (:plate, :kind, :brand, :model, :colo, :linee, :cylinder)");

		 	$consulta->bindParam(':plate',$this->placa);		$consulta->bindParam(':kind',$this->tipo);
		 	$consulta->bindParam(':brand',$this->marca);
		 	$consulta->bindParam(':model',$this->modelo);
		 	$consulta->bindParam(':colo',$this->color);
		 	$consulta->bindParam(':linee',$this->linea);
		 	$consulta->bindParam(':cylinder',$this->cilindraje);
		 	if ($consulta->execute()) {
		 		header('Location: ../Vista/formRegistroV.php?mensaje=correcto');
		 	}else{
		 		header('Location: ../Vista/formRegistroV.php?mensaje=incorrecto');
		 	}
		 }



			public function consuPorPlaca(){

			$filas=null;
			$consulta=$this->conjunto_residencial->prepare("SELECT tipo_vehiculo, marca_vehiculo, modelo_vehiculo, color_vehiculo, linea_vehiculo, cilindraje_vehiculo FROM vehiculo WHERE placa_vehiculo= :placa");
			$consulta->bindParam(':placa',$this->placa);
			$consulta->execute();

			while ($resultado= $consulta->fetch()){
				$filas[]=$resultado;
			}
			return $filas;
			}


			public function editarVehiculo(){
				$consulta=$this->conjunto_residencial->prepare("UPDATE vehiculo SET tipo_vehiculo=:type, marca_vehiculo=:marc, modelo_vehiculo=:mol, color_vehiculo=:colour, linea_vehiculo=:lin, cilindraje_vehiculo=:cilin  WHERE placa_vehiculo= :plac");
				$consulta->bindParam(':type',$this->tipo);
				$consulta->bindParam(':marc', $this->marca);
				$consulta->bindParam(':mol', $this->modelo);
				$consulta->bindParam(':colour', $this->color);
				$consulta->bindParam(':lin', $this->linea);
				$consulta->bindParam(':phone', $this->telefijo);
				$consulta->bindParam(':cilin', $this->cilindraje);
				$consulta->bindParam(':plac', $this->placa);


				if ($consulta->execute()) {
			header('Location: ../Vista/formConsultaEspecificaV.php?resultado=correcto&mensaje=pendiente');
		}else{
			header('Location: ../Vista/formConsultaEspecificaV.php?resultado=correcto');
		}
			}

		}

?>
