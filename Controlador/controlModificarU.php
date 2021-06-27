<?php

require_once('../Modelo/ClasUsuario.php'); 

if (isset($_POST) && !empty($_POST)) {
		$id=$_POST['txtIdRecibido'];
		$tipodoc=$_POST['txtTipodoc'];
		$nombres=$_POST['txtNombres'];
		$apellidos=$_POST['txtApellidos'];
		$tipo=$_POST['txtTipo'];
		$telcelular=$_POST['txtCelular'];
		$telefijo=$_POST['txtFijo'];
		$correo=$_POST['txtCorreo'];
		$clave=$_POST['txtClave'];	
		$confirmacion=$_POST['txtConfirmacionClave'];			
		$ocupacion=$_POST['txtOcupacion'];

		
		$objeUsuario= new Usuario();
		if ($clave==$confirmacion) {
			//envio los datos a la clase


		$objeUsuario->setId($id);	
		$objeUsuario->setTipodoc($tipodoc);
		$objeUsuario->setNombres($nombres);
		$objeUsuario->setApellidos($apellidos);
		$objeUsuario->setTipo($tipo);
		$objeUsuario->setTelcelular($telcelular);
		$objeUsuario->setTelefijo($telefijo);
		$objeUsuario->setCorreo($correo);
		$objeUsuario->setClave($clave);
		$objeUsuario->setConfirmacion($confirmacion);		
		$objeUsuario->setOcupacion($ocupacion);

		//que le lleguen los datos a la clase
	
		echo $objeUsuario->getClave()."<br>";
		echo $objeUsuario->getTipodoc()."<br>";
		echo $objeUsuario->getNombres()."<br>";
		echo $objeUsuario->getApellidos()."<br>";
		echo $objeUsuario->getTipo()."<br>";
		echo $objeUsuario->getTelcelular()."<br>";
		echo $objeUsuario->getTelefijo()."<br>";
		echo $objeUsuario->getCorreo()."<br>";
		echo $objeUsuario->getClave()."<br>";
		echo $objeUsuario->getConfirmacion()."<br>";
		echo $objeUsuario->getOcupacion()."<br>";
		echo $objeUsuario->getId()."<br>";

		//invoco el metodo

		$objeUsuario->editarUsuario();

}else{
		header('Location: ../Vista/formConsultaEspecificaU.php?mensaje=errorclave');
	}
}
	
	?>

	
		