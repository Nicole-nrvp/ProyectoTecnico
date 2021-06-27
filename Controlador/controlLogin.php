<?php

 		require_once('../Modelo/ClasUsuario.php'); 

 		if(isset($_POST) && !empty($_POST)){
 			$usuario=$_POST['txtUsuario'];
 			$clave=$_POST['txtClave'];
 			$objetoNombre = new Usuario();
 			$objetoNombre->setNombres($usuario);
 			$objetoNombre->setClave($clave);

 			if($objetoNombre->login()==true){
 				session_start();
 				$_SESSION["nombre"]=$usuario;//creada la session con el nombre de usuario

 				//hay que crear una variable de una session con el cargo a ese usuario 
 				$_SESSION["cargo"]=$objetoNombre->consultarCargo();
 				echo $_SESSION['cargo'];


 			header('Location: ../Vista/formMenu.php');

 			}else{

 				header('Location: ../Vista/formLogin.php?fallo=error');
 			}

 		}
 ?>