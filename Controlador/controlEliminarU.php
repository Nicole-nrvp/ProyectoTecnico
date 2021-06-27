<?php
require_once('../Modelo/ClasUsuario.php');
if (isset($_POST) && !empty($_POST)) {
	$usuario=$_POST['txtUsuario'];

	session_start();
	$usuarioSesion=$_SESSION["nombre"];

	if ($usuario==$usuarioSesion) {
		header('Location: ../Vista/formEliminarU.php?mensaje=usuarioigual');
	}else{

		$objUsuario=new Usuario();
		$objUsuario->setNombres($usuario);
		echo $objUsuario->getNombres();

		//INVOCAR EL METODO PARA ELIMINAR USUARIO 
		$objUsuario->eliminarUsuario();

	}

}

?>