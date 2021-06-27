<?php

session_start();
if (isset($_SESSION["nombre"])) {
	header("<h3>Bienvenid@".$_SESSION["nombre"]."</h3>");
}else{

	header('Location: formLogin.php');
}

?>
<!DOCTYPE html>
<html>

<center>
<head>
	<meta charset="utf-8">
	<title>Usuario</title>
	<link rel="stylesheet" type="text/css" href="../css/RegistrarU2.css">
	

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
<form method="POST" action="../Controlador/controlRegistroU.php">
	<div class="usuario1">
<center><br>
	<h1>Registrar Usuario</h1>

	<br>
	<br>

		<input type="number" name="txtId" placeholder="Id Usuario" ><br>
	<br>
	<br>
		<input type="text" name="txtTipodoc" placeholder="Tipodoc de Usuario"  maxlength='2' required><br>
	<br>
	<br>
	    <input type="text" name="txtNombres" placeholder="Nombres de Usuario"  maxlength='30' required><br>

	<br>
	<br>
	<input type="text" name="txtApellidos" placeholder="Apellidos de Usuario" maxlength='30' required><br>

	<br>
	<br>
	<label>Tipo de Usuario:</label><br>
	<select class="form-control" name="txtTipo">
		<option>  admi</option>
		<option> vigilante</option>
	</select>

	<br>
	<br>
	<input type="number" name="txtCelular" placeholder="Celular de Usuario"  max='9999999999' required><br>

	<br>
	<br>
	<input type="number" name="txtFijo" placeholder="Telefono Fijo de Usuario"  max='9999999' required><br>

	<br>
	<br>
	<input type="email" name="txtCorreo" placeholder="Correo de Usuario"  maxlength='50' required><br>

	<br>
	<br>
	<input type="text" name="txtOcupacion" placeholder="Ocupacion de Usuario"  maxlength='30' required><br>

	<br>
	<br>
	<input type="password" name="txtClave" placeholder="Clave de Usuario"  maxlength='32' required><br>

	<br>

	<br><input type="password" name="txtConfirmacion" placeholder="Clave Confirmar" value=""  maxlength='32' required><br>

	<br>
	
	<br>
	<br>
	
	<input type="submit"  value="Registrar" value="Registrar Usuario">
	
</center>
</center>
</div>
</form>
<?php

if ($_GET) {

	$mensaje=$_GET['mensaje'];
	if ($mensaje=='errorclave') {
		$error="<h4>La clave y la confirmación son diferentes, verifique y reintente</h4>";

		echo "<div class='alert alert-danger'>".$error."</div>";
	}
	if ($mensaje=='incorrecto') {
		$error="<h4>Error al registrar</h4>";
		echo "<div class='aler alert-ganger'>".$error."</div>";
	}
	if ($mensaje=='correcto') {
		$error="<h5>Registrado correctamente</h5>";
		echo "<div class='alert alert-succes'>".$error."</div>";
	}
}
?>

</center>
	<center>


	<a href="formUsuario.php"><input type="submit"  value="Volver"name="Volver"></a>
	
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