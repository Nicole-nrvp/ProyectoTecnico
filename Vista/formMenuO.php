<?php

session_start();
if (isset($_SESSION["nombre"])) {
	echo "<h3>Bienvenid@: ".$_SESSION["nombre"]."</h3>";

}else{

	header('Location: formLogin.php');


}

?>



<html>


<center>
<head>
	<meta charset="utf-8">
	<title>Menú</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css">

</head>
<body style="background-image: url('fondo4.png'); background-size: cover; background-repeat: no-repeat; ">

	
	<header>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<div id="logo"><br>
		<center><h1><font face="georgia">Ciudadela Cafamll Superlote 12</h1>
			</center>
		</div>
	</header>

<a href="../Controlador/CerrarSesion.php">Cerrar Sesión</a>
<a href="Usuario.html"><input type="submit"  value="Usuario "name="Usuario">
<a href="Parqueadero.html"><input type="submit"  value="Parqueadero "name="Parqueadero">
<a href="Vehiculo.html"><input type="submit"  value="Vehiculo "name="Vehiculo">
<a href="Apartamento.html"><input type="submit"  value="Apartamento"name="Apartamento">
<a href="RegistroVisita.html"><input type="submit"  value="RegistroVisita "name="RegistroVisita">
<a href="DetalleNovedad.html"><input type="submit"  value="DetalleNovedad"name="DetalleNovedad">
<a href="VehiculoVisita.html"><input type="submit"  value="VehiculoVisita"name="VehiculoVisita">



</a>
<head>
<div id="ff">
<center>
	
</div>
<center>
	<div id="tt">

		<center><p> @ciudadelacafam2@gmail.com <br><br>
			3145209916<br>
			<br>
			Carerra 145 #142-34<br><br>
		 </p></div></center>
</header><br>

</center>
</body>

</html>


<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<div id="logo"><br>