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
	<link rel="stylesheet" type="text/css" href="../css/Mostrar U2.css">
	

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

	<table border="1" cellpadding="10" cellpadding="5"> 


<tr>
		<th> Id  </th>
		<th> Tipo Documento </th>
		<th> Nombre </th>
		<th> Apellido </th>
		<th> Tipo </th>
		<th> Tel Celular  </th>
		<th> Tel Fijo </th>
		<th> Correo </th>
		<th> Contraseña </th>
		<th> Ocupacion </th>
	

</tr>

<?php
	require_once('../Modelo/ClasUsuario.php');
	$objUsuario=  new Usuario(); //creación del objeto 
	$DatosUsuarios=$objUsuario->consultarTodos(); 

	if ($DatosUsuarios!=null){
		foreach ($DatosUsuarios as $puntero){
		
	
?>

<tr>

		<td><?php echo $puntero['id_usuario'] ?></td>
		<td> <center> <?php echo $puntero['tipodoc_usuario'] ?> </center>  </td>
		<td> <center> <?php echo $puntero['nombres_usuario'] ?> </center>  </td>
		<td> <center> <?php echo $puntero['apellidos_usuario'] ?> </center> </td>
		<td> <center> <?php echo $puntero['tipo_usuario'] ?>  </center> </td>
		<td> <center> <?php echo $puntero['telcelular_usuario'] ?> </center> </td>
		<td> <center> <?php echo $puntero['telefijo_usuario'] ?> </center> </td>
		<td> <?php echo $puntero['correo_usuario'] ?> </td>
		<td> <center> <?php echo $puntero['contraseña_usuario'] ?> </center> </td>
		<td> <?php echo $puntero['ocupacion_usuario'] ?> </td>

</tr>

<?php
	}
}
?>
	 </table>
	

	<br>
	
	<a href="formConsulU.php"><input type="submit"  value="Consultar Usuario"name="Consultar Usuario"></a>
	
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