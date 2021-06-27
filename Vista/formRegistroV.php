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
	<link rel="stylesheet" type="text/css" href="../css/RegistrarV.css">
	

</head>

<body style="background-image: url('fonfo.jpg'); background-size: cover; background-repeat: no-repeat; ">

	


	
	<header>
		<div id="logo">
		<center><h1><font face="georgia">Cafamll Superlote 12</h1>
			</center>
		</div>
	</header>

<center>
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
<form method="POST" action="../Controlador/controlRegistroV.php">
	<div class="usuario1">
<center><br>
	<h1>Registrar Vehiculo</h1>

	<br>
	<br>

		<input type="text" name="txtPlaca" placeholder="Placa de Vehiculo "><br>
	<br>
    <br>
   <br>
	<input type="text" name="txtTipo" placeholder="Tipo de Vehiculo"><br>
	<br>
	<br>
	<br>
    
    <input type="text" name="txtMarca" placeholder="Marca de Vehiculo"><br>
	<br>    
    <br>
    <br>
    <label> Modelo:</label>
    <input type="date" name="txtModelo" placeholder="Modelo de Vehiculo"><br>
    <br>
    <br>
    
    <br>
    <input type="text" name="txtColor" placeholder="Color de Vehiculo"><br>
    <br>
    <br>
    <br>
    <input type="text" name="txtLinea" placeholder="Linea de Vehiculo"><br>
    <br>
    <br>
    <br>
    <input type="text" name="txtCilindraje" placeholder="Cilindraje de Vehiculo"><br>
    
	<br>
	<br>
	
	<input type="submit"  value="Registrar" value="Registrar Usuario">


	</center>
</center>

	<br>
	<br>
	<br>
</div>
</form>
<?php

if ($_GET) {

	$mensaje=$_GET['mensaje'];
	
	if ($mensaje=='incorrecto') {
		$error='Datos no registrados, error, la placa ya existe, verifique datos y reintente';
		echo "<div class='aler alert-ganger'>".$error."</div>";
	}
	if ($mensaje=='correcto') {
		$error='Datos registrados correctamente';
		echo "<div class='alert alert-succes'>".$error."</div>";
	}
}
?>
</center>
	<center>


	
	
<h3>
	@ciudadelacafam2@gmail.com
	<br> 
	3145209916
	<br>
	Carerra 145 #142-34
</h3>
</center>
</div>
</body>

</html>