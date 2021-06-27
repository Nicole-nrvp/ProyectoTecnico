<?php
require_once('../Modelo/ClasVehiculo.php');
if (isset($_POST) && !empty($_POST)) {
	$placa=$_POST['txtPlaca'];
	$tipo=$_POST['txtTipo'];
	$marca=$_POST['txtMarca'];
	$modelo=$_POST['txtModelo'];	
	$color=$_POST['txtColor'];		
	$linea=$_POST['txtLinea'];
	$cilindraje=$_POST['txtCilindraje'];

	$objetoVehiculo = new Vehiculo();

	$objetoVehiculo->setPlaca($placa);
	$objetoVehiculo->setTipo($tipo);
	$objetoVehiculo->setMarca($marca);
	$objetoVehiculo->setModelo($modelo);
	$objetoVehiculo->setColor($color);
	$objetoVehiculo->setLinea($linea);
	$objetoVehiculo->setCilindraje($cilindraje);
//INVOCAR METODO
	$objetoVehiculo->registrarVehiculo();

	echo $objetoVehiculo->getPlaca()."<br>";
	echo $objetoVehiculo->getTipo()."<br>";				
	echo $objetoVehiculo->getMarca()."<br>";				
	echo $objetoVehiculo->getModelo()."<br>";				
	echo $objetoVehiculo->getColor()."<br>";				
	echo $objetoVehiculo->getLinea()."<br>";				
	echo $objetoVehiculo->getCilindraje()."<br>";	
	}
?>							