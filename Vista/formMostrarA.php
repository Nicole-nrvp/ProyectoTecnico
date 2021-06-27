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
	<title>Apartamento</title>
	<link rel="stylesheet" type="text/css" href="../css/Mostrar A.css">
	

</head>

<body style="background-image: url('fonfo.jpg'); background-size: cover; background-repeat: no-repeat; ">

	


	<center>
	<header>
		<div id="logo">
		<center>

			<h1><font face="georgia">Cafamll Superlote 12</h1>

		</div>
	</header>
	</center>


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
	<h1>Apartamento</h1>


	<br>
	<br>
	<br>

	<table border="1" cellpadding="10" cellpadding="5"> 


<tr>
		<th> Id  </th>
		<th> Interior  </th>
		<th> Numero </th>
		<th> Id Usuario </th>
	

</tr>
<tr>

		<td>23652</td>
		<td> <center> si </center>  </td>
		<td> <center> 2069 </center>  </td>
		<td> <center> 43695245  </center> </td>
		
</tr>

</table>
	

	<br>
	<br>
	
	<a href="formConsulA.php"><input type="submit"  value="Consultar Apartamento"name="Consultar Apartamento"></a>

	<br>
	<br>

	<a href="formApartamento.php"><input type="submit"  value="Volver"name="Volver"></a>
	
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