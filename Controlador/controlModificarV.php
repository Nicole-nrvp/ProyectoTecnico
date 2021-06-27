<?php


require_once('../Modelo/ClasVehiculo.php'); 

if (isset($_POST) && !empty($_POST)) {
		$placa=$_POST['txtPlacaRecibida'];
		$tipo=$_POST['txtTipo'];
		$marca=$_POST['txtMarca'];
		$modelo=$_POST['txtModelo'];
		$color=$_POST['txtColor'];
		$linea=$_POST['txtLinea'];
		$cilindraje=$_POST['txtCilindraje'];
		

		
		$objeVehiculo= new Vehiculo();
		$objeVehiculo->setPlaca($placa);	
		$objeVehiculo->setTipo($tipo);
		$objeVehiculo->setMarca($marca);
		$objeVehiculo->setModelo($modelo);
		$objeVehiculo->setColor($color);
		$objeVehiculo->setLinea($linea);				
		$objeVehiculo->setCilindraje($cilindraje);

		

			//INVOCAR METODO
		$objeVehiculo->editarUsuario();
		
		echo $objeVehiculo->getPlaca()."<br>";
		echo $objeVehiculo->getTipo()."<br>";
		echo $objeVehiculo->getMarca()."<br>";
		echo $objeVehiculo->getModelo()."<br>";
		echo $objeVehiculo->getColor()."<br>";
		echo $objeVehiculo->getLinea()."<br>";
		echo $objeVehiculo->getCilindraje()."<br>";
		echo $objeVehiculo->getPlaca()."<br>";



	}
	?>
