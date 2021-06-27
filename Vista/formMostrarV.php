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
	<title>Vehiculo</title>
	<link rel="stylesheet" type="text/css" href="../css/MostrarV.css">
	

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
	<br>
	<br>

	<div class="usuario1">
<center><br>
	<h1>Vehiculo</h1>

	<table border="1" cellpadding="10" cellpadding="5"> 


<tr>
		<th> Placa  </th>
		<th> Tipo  </th>
		<th> Marca </th>
		<th> Modelo </th>
		<th> Color </th>
		<th> Linea  </th>
		<th> Cilindraje  </th>

	

</tr>
<?php
	require_once('../Modelo/ClasVehiculo.php');
	$objVehiculo=  new Vehiculo(); //creación del objeto 
	$DatosVehiculo=$objVehiculo->consultarTodos(); 

	if ($DatosVehiculo!=null){
		foreach ($DatosVehiculo as $puntero){
		
	
?>
<tr>

		<td><?php echo $puntero['placa_vehiculo'] ?></td>
		<td> <center> <?php echo $puntero['tipo_vehiculo'] ?> </center>  </td>
		<td> <center> <?php echo $puntero['marca_vehiculo'] ?> </center>  </td>
		<td> <center> <?php echo $puntero['modelo_vehiculo'] ?> </center> </td>
		<td> <center> <?php echo $puntero['color_vehiculo'] ?>  </center> </td>
		<td> <center> <?php echo $puntero['linea_vehiculo'] ?> </center> </td>
		<td> <center> <?php echo $puntero['cilindraje_vehiculo'] ?> </center> </td>
	
		
</tr>
<?php
	}
}
?>

</table>
	

	<br>

	<a href="formConsulV.php"><input type="submit"  value="Consultar Vehiculo"name="Consultar Parqueadero"></a>
	
</center>

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







