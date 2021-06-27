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
	<link rel="stylesheet" type="text/css" href="../css/consultaEspecificaU.css">
	

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

	<?php
if ($_GET){
	$resultado=$_GET['resultado'];
	if($resultado=='correcto'){
		echo "<h2> Datos modificados correctamente </h2>";
	}else{
	$placa=$_GET['placa'];
	$mensaje=$_GET['mensaje'];
	$tipo=$_GET['tipo'];
	$marca=$_GET['marca'];
	$modelo=$_GET['modelo'];
	$color=$_GET['color'];
	$linea=$_GET['linea'];
	$cilindraje=$_GET['cilindraje'];
	

	if ($mensaje=='incorrecto') {
		echo "No se encontraron datos para ese Vehiculo";
	 
}
?>	
	<form method="POST" action="../Controlador/controlConsultarVehiculo.php">

	<div class="usuario1">
<br>
	<h1>Modificación de Vehiculo</h1>
<br>
	<br>
	
	<form method="POST" action="#">
			
	
		<input type="hidden" name="txtPlacaRecibida" value="<?php echo$id; ?>">		

	    <input type="text" name="txtTipo" placeholder="Tipo de Vehiculo" value="<?php echo$tipo; ?>"><br>

	<br>
	<br>
	<input type="text" name="txtMarca" placeholder="Marca de Vehiculo" value="<?php echo$marca; ?>"><br>

	<br>
	<br>
	<input type="date" name="txtModelo" placeholder="Modelo de Vehiculo" value="<?php echo$modelo; ?>"><br>

	<br>
	<br>
	<input type="text" name="txtColor" placeholder="Color de Vehiculo" value="<?php echo$color; ?>"><br>

	<br>
	<br>
	<input type="text" name="txtLinea" placeholder="Linea de Vehiculo" value="<?php echo$linea; ?>"><br>

	<br>
	<br>
	<input type="number" name="txtCilindraje" placeholder="Cilindraje de Vehiculo" value="<?php echo$cilindraje; ?>"><br>

	<br>
	<br>
	
	

	<br>

	<input type="submit"  value="Modificar Datos"name="Modificar Datos"></a>

	
	
	<?php
}
}

?>
	
	
	
</div>
</form>




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