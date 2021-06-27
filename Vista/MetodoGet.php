<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body style="background-image: url('fondo2.jpg'); background-size: cover; background-repeat: no-repeat; ">

	<div style="display: flex; align-items: center; justify-content: center; min-height:  100vh;">

			<form method="POST" action="../Controlador/controlLogin.php">

		<div class="panel panel-light">
			
			<div class="pnael-heading">
				<center><label>Login Conjunto Residencial</label></center>
			</div>

			<div class="panel-body">
				<div class="form-group">

					<br><label>usuario: </label>
					<input type="text" name="txtUsuario" class="form-control"><br><br>

					<label>clave: </label>
					<input type="password" name="txtClave" class="form-control"><br>

					<center><br><input type="submit" name="btnLogin" value="Iniciar Sesión" class="btn btn-primary"><br></center>
					</div>
				
				</div>

			</div>
		</form>
	</div>

</body>
</html>