<?php
require_once ('../Modelo/ClasUsuario.php');
if (isset($_POST) && !empty($_POST)) {
	$id=$_POST['txtId'];

	$objUsuario= new Usuario();
	$objUsuario->setId($id);


	echo $objUsuario->getId();
	//INVOCAR EL METODO
	$filas=$objUsuario->consuPorId();
	if($filas==null){

		header('Location: ../Vista/formConsulU.php?mensaje=incorrecto');
}else{
	foreach ($filas as $fila) {
		$id=$fila['id_usuario'];
		$tipodoc=$fila['tipodoc_usuario'];
		$nombres=$fila['nombres_usuario'];
		$apellidos=$fila['apellidos_usuario'];
		$tipo=$fila['tipo_usuario'];
		$telcelular=$fila['telcelular_usuario'];
		$telefijo=$fila['telefijo_usuario'];
		$correo=$fila['correo_usuario'];
		$ocupacion=$fila['ocupacion_usuario'];
	
		echo $tipodoc."<br>";
		echo $nombres."<br>";
		echo $apellidos."<br>";
		echo $tipo."<br>";
		echo $telcelular."<br>";
		echo $telefijo."<br>";
		echo $correo."<br>";
		echo $ocupacion."<br>";
		header('Location: ../Vista/formConsultaEspecificaU.php?mensaje=correcto&id='.$id.'&tipodoc='.$tipodoc.'&nombres='.$nombres.'&apellidos='.$apellidos.'&tipo='.$tipo.'&telcelular='.$telcelular.'&telefijo='.$telefijo.'&correo='.$correo.'&ocupacion='.$ocupacion.'&resultado=pendiente');


		}
	}
}
?>