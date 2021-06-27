<?php

	require_once('conexionBase.php');
class Usuario extends conexion{
	private $id;
	private $tipodoc;
	private $nombres;
	private $apellidos;
	private $tipo;
	private $telcelular;
	private $telefijo;
	private $correo;
	private $clave;
	private $ocupacion;

	public function __construct(){
		$this->conjunto_residencial = parent::__construct();
	}


	public function getId(){
		return $this->id;
	}

	public function setId($idusua){
		$this->id=$idusua;
	}

	public function getTipodoc(){
		return $this->tipodoc;
	}

	public function setTipodoc($tipodo){
		$this->tipodoc=$tipodo;
	}


	public function getNombres(){
		return $this->nombres;
	}

	public function setNombres($name){
		$this->nombres=$name;
	}
	
	public function getApellidos(){
		return $this->apellidos;
	}

	public function setApellidos($apelli){
		$this->apellidos=$apelli;
	}
	
	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tip){
		$this->tipo=$tip;
	}
	
	public function getTelcelular(){
		return $this->telcelular;
	}

	public function setTelcelular($celular){
		$this->telcelular=$celular;
	}
	
	public function getTelefijo(){
		return $this->telefijo;
	}

	public function setTelefijo($fijo){
		$this->telefijo=$fijo;
	}
	
	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($corre){
		$this->correo=$corre;
	}
	
	public function getClave(){
		return $this->clave;
	}

	public function setClave($pass){
		$this->clave=$pass;
	}

	public function getConfirmacion(){
		return $this->confirmacion;
	}

	public function setConfirmacion($confir){
		$this->confirmacion=$confir;
	}

	public function getOcupacion(){
		return $this->ocupacion;
	}

	public function setOcupacion($ocupado){
		$this->ocupacion=$ocupado;
	}
	
	
	//Metodos........
		public function registrarUsuar(){

		}
		public function consultarUsuario(){

		}
		public function modificarUsuarip(){

		}
		public function inhabilitarUsuario(){

		}


		//Metodos-------------------------
		public function login(){
			
			$consulta=$this->conjunto_residencial->prepare("CALL ProLogin(:Nombres, :Clave)");
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
		$consulta=$this->conjunto_residencial->prepare("SELECT * FROM Usuario limit 7");
		$consulta->execute();
		while($resultado= $consulta->fetch()){
			$filas[]=$resultado;

			}
			return $filas;

		}

		public function registrarUsuario(){
			$consulta=$this->conjunto_residencial->prepare("CALL ProRegistrarUsuario(:Cold,:Sel,:Name,:Lastn,:Type,:Cell,:Phone,:Mail,:Passw,:Ocupation)");

		$consulta->bindParam(':Cold', $this->id);
		$consulta->bindParam(':Sel', $this->tipodoc);		
		$consulta->bindParam(':Name', $this->nombres);
		$consulta->bindParam(':Lastn', $this->apellidos);
		$consulta->bindParam(':Type', $this->tipo);
		$consulta->bindParam(':Cell', $this->telcelular);
		$consulta->bindParam(':Phone', $this->telefijo);
		$consulta->bindParam(':Mail', $this->correo);
		$consulta->bindParam(':Passw', $this->clave);
		$consulta->bindParam(':Ocupation', $this->ocupacion);

		if ($consulta->execute()) {
			header('Location: ../Vista/formRegistroU.php?mensaje=correcto');
		}else{
			header('Location: ../Vista/formRegistroU.php?mensaje=incorrecto');

		}
	}
		
		public function eliminarUsuario(){
			$consulta=$this->conjunto_residencial->prepare("CALL ProEliminarUsuario(:name)");
			$consulta->bindParam(':name',$this->nombres);

			if ($consulta->execute()) {
			header('Location: ../Vista/formEliminarU.php?mensaje=correcto');
		}else{
			header('Location: ../Vista/formEliminarU.php?mensaje=incorrecto');

		}
	}

		public function consuPorId(){

			$filas=null;
			$consulta=$this->conjunto_residencial->prepare("CALL ProConsultarPorId(:id)");
			$consulta->bindParam(':id',$this->id);
			$consulta->execute();

			while ($resultado= $consulta->fetch()){
				$filas[]=$resultado;
			}
			return $filas;
			}

			public function consultarCargo(){

			$filas=null;
			$consulta=$this->conjunto_residencial->prepare("CALL ProConsultarCargo(:name)");
			$consulta->bindParam(':name',$this->nombres);
			$consulta->execute();

			while ($resultado= $consulta->fetch()){
				$filas[]=$resultado;
			}
			$cargo=null;
			foreach ($filas as $fila) {
				$cargo=$fila['tipo_usuario'];

				}
			return $cargo;
			}


			public function editarUsuario(){
				$consulta=$this->conjunto_residencial->prepare("CALL ProModificarUsuraio(:sel, :name, :lastn, :type, :cell, :phone, :mail, :clav, :ocupation, :codigo)");
				$consulta->bindParam(':sel',$this->tipodoc);
				$consulta->bindParam(':name', $this->nombres);
				$consulta->bindParam(':lastn', $this->apellidos);
				$consulta->bindParam(':type', $this->tipo);
				$consulta->bindParam(':cell', $this->telcelular);
				$consulta->bindParam(':phone', $this->telefijo);
				$consulta->bindParam(':mail', $this->correo);
				$consulta->bindParam(':clav', $this->clave);			
				$consulta->bindParam(':ocupation', $this->ocupacion);
				$consulta->bindParam(':codigo',$this->id);


				if ($consulta->execute()) {
			header('Location: ../Vista/formConsultaEspecificaU.php?mensaje=editarok');
		}else{
			header('Location: ../Vista/formConsultaEspecificaU.php?mensaje=editarerror');
		}
			}

		}

?>