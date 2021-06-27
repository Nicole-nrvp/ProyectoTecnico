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
	<title>Parqueadero</title>
	<link rel="stylesheet" type="text/css" href="../css/MostrarP.css">
	

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
	<h1>Parqueadero</h1>

	<table border="1" cellpadding="10" cellpadding="5"> 
<br>

<tr>
		<th> Id  </th>
		<th> Tipo  </th>
		<th> Uso </th>
		<th> Estado </th>
		<th> Id Usuario </th>
		<th> Placa Vehiculo  </th>
	

</tr>
<?php
	require_once('../Modelo/ClasParqueadero.php');
	$objParqueadero=  new Parqueadero(); //creación del objeto 
	$DatosParqueadero=$objParqueadero->consultarTodos(); 

	if ($DatosParqueadero!=null){
		foreach ($DatosParqueadero as $puntero){
		
	
?>
<tr>

		<td><?php echo $puntero['id_parqueadero'] ?></td>
		<td> <center> <?php echo $puntero['tipo_parqueadero'] ?> </center>  </td>
		<td> <center> <?php echo $puntero['uso_parqueadero'] ?> </center>  </td>
		<td> <center> <?php echo $puntero['estado_parqueadero'] ?> </center> </td>
		<td> <center> <?php echo $puntero['id_usuario'] ?>  </center> </td>
		<td> <center> <?php echo $puntero['placa_vehiculo'] ?> </center> </td>

		
</tr>
<?php
	}
}
?>

</table>
	

	<br>
	<br>
	
	<a href="formConsulP.php"><input type="submit"  value="Consultar Parqueadero"name="Consultar Parqueadero"></a>
	
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










