<?php
require_once ('../Modelo/ClasVehiculo.php');
if (isset($_POST) && !empty($_POST)) {
	$placa=$_POST['txtPlaca'];

	$objVehiculo= new Vehiculo();
	$objVehiculo->setPlaca($placa);


	echo $objVehiculo->getPlaca();
	//INVOCAR EL METODO
	$filas=$objVehiculo->consuPorPlaca();
	if($filas==null){

		header('Location: ../Vista/formConsulV.php?mensaje=incorrecto');
}else{
	foreach ($filas as $fila) {
		$tipo=$fila['tipo_vehiculo'];
		$marca=$fila['marca_vehiculo'];
		$modelo=$fila['modelo_vehiculo'];
		$color=$fila['color_vehiculo'];
		$linea=$fila['linea_vehiculo'];
		$cilindraje=$fila['cilindraje_vehiculo'];
		
	
		echo $tipo."<br>";
		echo $marca."<br>";
		echo $modelo."<br>";
		echo $color."<br>";
		echo $linea."<br>";
		echo $cilindraje."<br>";
		header('Location: ../Vista/formConsultaEspecificaV.php?mensaje=correcto&tipo='.$tipo.'&marca='.$marca.'&modelo='.$modelo.'&color='.$color.'&linea='.$linea.'&cilindraje='.$cilindraje);


		}
	}
}
?>