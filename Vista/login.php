<?php

session_start();
if (isset($_SESSION["nombre"])) {
	header('Location: formMenu.php');
}

?>


<html><br>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<center>
<head>
	<meta charset="utf-8">

	<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0
	minimum-scale=1.0">

	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/loginnicol.css">
	
</head>
<form method="POST" action="../Controlador/controlLogin.php">

<body ><br>
	
<center>

	<div id="login">
	
	
 	
		<div id="sola">
			<p>
					<center><br>
					<img src="../css/logo2.png"></img>
	<br>		
		</p>
		
    </div>
		
	

	<h1><font face="georgia">Cafamll Superlote 12</h1></font>
	<h2>Login</h2>


<div id='Uno'>
	<br><label>usuario: </label>
					<input type="text" name="txtUsuario" class="form-control"><br><br>

					<label>clave: </label>
					<input type="password" name="txtClave" class="form-control"><br>

					<center><br><input type="submit" name="btnLogin" value="Iniciar Sesión" class="btn btn-white"><br></center>

</div>
	</h1>
</center>

		
	</div><br><br>

					<?php
						if ($_GET){
						$fallo=$_GET['fallo'];
						if ($fallo='error'){
				$mensaje="Error, verifique sus datos y reintente";
			echo "<div class='alert alert-danger'>".$mensaje."</div>";

						}
					}

					?>
				</h1>
			</center>
		</p>
	</div>
</div>
</center>
</form>
</body>
</center>
</html>

	
