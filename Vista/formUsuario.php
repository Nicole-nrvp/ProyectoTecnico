<?php

session_start();
if (isset($_SESSION["nombre"])) {
	header("<h3>Bienvenid@".$_SESSION["nombre"]."</h3>");
}else{

	header('Location: formLogin.php');
}
//GESTION DE PRIVILEGIOS 
	$privilegios='none';
	$cargo=$_SESSION['cargo'];
	if ($cargo=='vigilante') {
		$privilegios='none';

	}else{
		$privilegios='block';
	}
?>
<!DOCTYPE html>
<html>

<center>
<head>
	<meta charset="utf-8">
	<title>Usuario</title>
	<link rel="stylesheet" type="text/css" href="../css/formusuario.css">
	

</head>

<body style="background-image: url('fonfo.jpg'); background-size: cover; background-repeat: no-repeat; ">

 	


	
	<header>
		<div id="logo">
		<center><h1><font face="georgia">Cafamll Superlote 12</h1>
			</center>
		</div>
	</header>


<a href="formMenu.php"><input type="submit"  value="Menu "name="Menu"></a>
<br>
<a style="display: <?php echo $privilegios ?>;" href="formUsuario.php"><input type="submit"  value="Usuario "name="Usuario"></a>
<a href="formParqueadero.php"><input type="submit"  value="Parqueadero "name="Parqueadero"></a>
<a href="formVehiculo.php"><input type="submit"  value="Vehiculo "name="Vehiculo"></a>
<a href="formApartamento.php"><input type="submit"  value="Apartamento"name="Apartamento"></a>
<a href="formRegistroVisita.php"><input type="submit"  value="RegistroVisita "name="RegistroVisita"></a>
<a style="display: <?php echo $privilegios ?>;" href="formDetalleNovedad.php"><input type="submit"  value="DetalleNovedad"name="DetalleNovedad"></a>
<a href="formVehiculoVisita.php"><input type="submit"  value="VehiculoVisita"name="VehiculoVisita"></a>

	<br>
	<br>

	<div class="usuario1">
<center><br>
	<h1>Usuario</h1>

	
	
	<header>
		<div class="cuerpo">
		<h2><font face="georgia"><center> Hola, bienvenid@ al modulo de usuarios  </center></font></h2>
		<center><br>
			En este modulo encontras la famosa CRUD, acá podras consultar todos los usuarios del conjunto o uno en especifico, puedes registrar,  modificar y eliminar usuarios. 
			<br>
			<br>
			Espero este modulo sea de tu agrado.

			<br>
			<br>
	<div class="sola">
		<img src="../css/Capturausua.png"></img>
    </div> 
		</center>	
		</div>
	</header>

	<br>
	<br>
	<a href="formRegistroU.php"><input type="submit" name="registrar usuario" value="Registrar usuario"></a> 

	<a href="formMostrarU.php"><input type="submit"  value="Mostrar Todo"name="Mostrar Todo"></a>
	
	<a href="formEliminarU.php"><input type="submit" name="" value="Eliminar usuario"></a>	

</center>

	<br>
	<br>
	<br>

<h3>
	@ciudadelacafam2@gmail.com
	<br> 
	3145209916
	<br>
	Carerra 145 #142-34
</h3>

</div>
</body>
</html>