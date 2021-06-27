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
	<link rel="stylesheet" type="text/css" href="../css/eliminarU.css">
	

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

	<?php

	if ($_GET) {
		$mensaje=$_GET['mensaje'];
			if ($mensaje=='usuarioigual') {
				echo "<h4>No se puede eliminar al usuario que esta en sesion</h4>";
			}else{
				if($mensaje=='incorrecto'){
					echo "<h4>No se puede eliminar al usuario por restricciones en la base de datos</h4>";
				}else{
					echo "<h5>Usuario eliminado correctamente<h5>";

				}
			}
	}

	?>

<form method="POST" action="../Controlador/controlEliminarU.php">


	<label><h3> Digite el nombre de usuario a eliminar</h3></label>
	<br>
	<br>
	 <input type="text" name="txtUsuario" placeholder="Nombre"><br>
	 <br>
	 <br>
	 <input type="submit" name="btnEliminar Usuario" value="Eliminar Usuario" onclick=" return alerta()">
</form>

<script type="text/javascript">
	function alerta()
    {
    var opcion = confirm("Está seguro de que desea eliminar al usuario?");
    return opcion;
}
</script>	

	 <br>
	 <br>
	 <h3>
	@ciudadelacafam2@gmail.com
	<br> 
	3145209916
	<br>
	Carerra 145 #142-34
</h3>
	

</form>
</center>
</div>
</font>
</h1>
</center>
</div>
	<br>

</header>
	
</body>
</center>