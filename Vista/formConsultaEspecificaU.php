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
	<link rel="stylesheet" type="text/css" href="../css/consultaEspecificaVerdaderoU2.css">
	

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
	$mensaje=$_GET['mensaje'];
	if($mensaje=='incorrecto'){
		echo "<h2> No hay datos de usuario asociados al codigo digitado, verifique y reintente </h2>";
	}else{
		if($mensaje=='errorclave'){
			echo "<h2> La clave y la confirmacion no coinciden, verifique y reintente </h2>";
		}else{
			if($mensaje=='editarok'){
				echo "<h5>Datos Modificados Correctamente</h5>";
			}else{
				$id=$_GET['id'];
				$mensaje=$_GET['mensaje'];
				$tipodoc=$_GET['tipodoc'];
				$nombres=$_GET['nombres'];
				$apellidos=$_GET['apellidos'];
				$tipo=$_GET['tipo'];
				$telcelular=$_GET['telcelular'];
				$telefijo=$_GET['telefijo'];
				$correo=$_GET['correo'];
				$ocupacion=$_GET['ocupacion'];

	

?>	
	<form method="POST" action="../Controlador/controlModificarU.php">

	<div class="usuario1">
<br>
	<h1>Modificación de Usuario</h1>
<br>

<h4>Si no va a cambiar su contraseña, digite la que tiene actualmente tanto en el campo de clave como en el de confirmación</h4>	<br>
	
		<input type="hidden" name="txtIdRecibido" value="<?php echo$id; ?>">		
	
		<input type="text" name="txtTipodoc" placeholder="Tipodoc de Usuario " value="<?php echo$tipodoc; ?>" maxlength='2' required><br>
	<br>
	<br>
	    <input type="text" name="txtNombres" placeholder="Nombres de Usuario" value="<?php echo$nombres; ?>"  maxlength='30' required><br>

	<br>
	<br>
	<input type="text" name="txtApellidos" placeholder="Apellidos de Usuario" value="<?php echo$apellidos; ?>"  maxlength='30' required><br>

	<br>
	<br>
	<label>Tipo de Usuario:</label>
	<select class="form-control" name="txtTipo">
		<option> <?php if($tipo=='Administrador'){echo "selected";} ?> admin</option>
		<option> <?php if($tipo=='Visitante'){echo "selected";} ?> vigilante</option>

		
	</select>
	<br>
	<br>
	<input type="number" name="txtCelular" placeholder="Celular de Usuario" value="<?php echo$telcelular; ?>"  max='9999999999' required><br>

	<br>
	<br>
	<input type="number" name="txtFijo" placeholder="Telefono Fijo de Usuario" value="<?php echo$telefijo; ?>"  max='9999999' required><br>

	<br>
	<br>
	<input type="email" name="txtCorreo" placeholder="Correo de Usuario" value="<?php echo$correo; ?>"  maxlength='50' required><br>

	<br>
	<br>
	<input type="password" name="txtClave" placeholder="Clave de Usuario" value=""  maxlength='32' required><br>
	<br>
	<br>
	<input type="password" name="txtConfirmacionClave" placeholder="Confirmacion de Clave" value=""  maxlength='32' required><br>
	<br>
	<br>

	<input type="text" name="txtOcupacion" placeholder="Ocupacion de Usuario" value="<?php echo$ocupacion; ?>"  maxlength='30' required><br>

	<br>
	<br>

	
	<input type="submit"  value="Modificar Datos"name="Modificar Datos"></a>
</form>
	
	<?php
			}

		}
	}
}

?>
	
	
</div>
<h3>
	@ciudadelacafam2@gmail.com
	<br> 
	3145209916
	<br>
	Carerra 145 #142-34
</h3>

</body>

</html>