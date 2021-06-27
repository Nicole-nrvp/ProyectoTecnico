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
	<title>VehiculoVisita</title>
	<link rel="stylesheet" type="text/css" href="../css/formvehivisita.css">
	

</head>

<body style="background-image: url('fonfo.jpg'); background-size: cover; background-repeat: no-repeat; ">

	


	<center>
	<header>
		<div id="logo">

			<h1><center><font face="georgia">Cafamll Superlote 12</font></center></h1>

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
	<h1>Vehiculo Visita</h1>

	
	<br>
	<header>
		<div class="cuerpo">
		<h2><font face="georgia"><center> Hola, bienvenid@ al modulo visita de vehiculos   </center></font></h2>
		<center><br>
			En este modulo encontras la famosa CRUD, acá podras consultar todos los las visitas que netran en vehiculo al conjunto, puedes registrar,  modificar y eliminar.
			<br>
			<br>
			Espero este modulo sea de tu agrado.

			<br>
			<br>
	<div class="sola">

    </div> 
		</center>	
		</div>
	</header>
	<br>
	<br>
	<a href="formMostrarVV.php"><input type="submit"  value="Mostrar Todo"name="Mostrar Datos"></a>	
	<BR>
	<input type="submit" name="" value="Inhabilitar Vehiculo Visit">	
	<input type="submit" name="" value="Registrar Vehiculo Visit">
</center>

</div>
	<br>
<h3>
 	@ciudadelacafam2@gmail.com 
 	<br>
	3145209916
	<br>
	Carerra 145 #142-34
</h3>

</body>

</html>