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
	<link rel="stylesheet" type="text/css" href="../css/ConsultarU2.css">
	

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

	<br>
	<br>
	<form method="POST" action="../Controlador/controlConsultarUsuario.php">
		

		<label>Id Usuario:</label><br><br>
		<input type="number" name="txtId" placeholder="" maxlength='11' required ><br>
	<br>
	<br>
	<br>
	
	<a href="formConsultaEspecificaU.php"><input type="submit"  value="Consultar"name="Consultar"></a>

</center>

	</form>
	<a href="formUsuario.php"><input type="submit"  value="Volver"name="Volver"></a>
	
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