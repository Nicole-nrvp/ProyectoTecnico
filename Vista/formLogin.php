<?php

session_start();
if (isset($_SESSION["nombre"])) {
	header('Location: formMenu.php');
}

?>


<html><br>
<head>
	<meta charset="utf-8">
	<title>INICIO</title>
</head>
<center>
<head>
	

	<title>INICIO</title>
	<link rel="stylesheet" type="text/css" href="../css/loginnicol2.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">



	
</head>
<form method="POST" action="../Controlador/controlLogin.php">

<body>
	
	
	<br>
	<br>

	<br>
	<br>
	<br>


<div id="login">  

	<div class="sola">
		
    </div>

	
	<h1><font face="georgia">Cafamll Superlote 12</h1></font>
	<h2>INICIO</h2>


<div id="Uno">
	<br><label>usuario: </label>
					<input type="text" style= "width:50%" name="txtUsuario" class="form-control"><br><br>

					<label>clave: </label>
					<input type="password" style= "width:50%" name="txtClave" class="form-control">

					<center><br><input type="submit"  name="btnLogin" value="Ingresar" class="btn btn-white"><br></center>

					<?php
						if ($_GET){
						$fallo=$_GET['fallo'];
						if ($fallo='error'){
				$mensaje="Error, verifique sus datos y reintente";
			echo "<div class='alert alert-danger'>" .$mensaje."</div>";

		}
	}
	?>



</div>
	
</div>

				
				</h1>
			</center>
		</p>
	</div>
</div>
</center>
</form>
<center> <a href="formInicioPagina.php"><input type="submit"  value=" VOLVER PAGINA "name="VOLVER PAGINA"></a></center>

</body>
</center>
</html>

	
