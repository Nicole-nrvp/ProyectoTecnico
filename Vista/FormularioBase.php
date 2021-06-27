

<html>
<head>
	<title>Prueba conexion</title>
</head>
<body>
	<?php
		include('../modelo/conexionBase.php');
		$objeto=new conexion();
		echo "".$objeto->conectar();
	?>
</body>
</html>




 