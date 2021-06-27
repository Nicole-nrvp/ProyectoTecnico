<?php
require_once('../Modelo/ClasUsuario.php');

if (isset($_POST) && !empty($_POST)) {
	$id=$_POST['txtId'];
	$tipodoc=$_POST['txtTipodoc'];
	$nombres=$_POST['txtNombres'];
	$apellidos=$_POST['txtApellidos'];
	$tipo=$_POST['txtTipo'];
	$celular=$_POST['txtCelular'];
	$fijo=$_POST['txtFijo'];
	$correo=$_POST['txtCorreo'];
	$ocupacion=$_POST['txtOcupacion'];
	$clave=$_POST['txtClave'];
	$confirmacion=$_POST['txtConfirmacion'];

	$objetoUsuario=new Usuario();
	if ($clave==$confirmacion) {

		$objetoUsuario->setId($id);
		$objetoUsuario->setTipodoc($tipodoc);
		$objetoUsuario->setNombres($nombres);
		$objetoUsuario->setApellidos($apellidos);
		$objetoUsuario->setTipo($tipo);
		$objetoUsuario->setTelcelular($celular);
		$objetoUsuario->setTelefijo($fijo);
		$objetoUsuario->setCorreo($correo);	
		$objetoUsuario->setOcupacion($ocupacion);	
		$objetoUsuario->setClave($clave);

		$objetoUsuario->registrarusuario();
		}else{
			header('Location: ../Vista/formRegistroU.php?mensaje=errorclave');
		}
/*
	echo $objetoUsuario->getId()."<br>";
	echo $objetoUsuario->getTipoDoc()."<br>";
	echo $objetoUsuario->getNombres()."<br>";
	echo $objetoUsuario->getApellidos()."<br>";
	echo $objetoUsuario->getTipo()."<br>";
	echo $objetoUsuario->getTelcelular()."<br>";
	echo $objetoUsuario->getTelefijo()."<br>";
	echo $objetoUsuario->getCorreo()."<br>";
	echo $objetoUsuario->getClave()."<br>";
	echo $confirmacion."<br>"; */



}

?>