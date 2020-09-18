<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$server= "localhost";
	$usuario="root";
	$contrasena="";
	$bd="bancoviernes";

	$conexion = mysqli_connect($server, $usuario, $contrasena, $bd) or die("Error en la conexion");

	$consulta = mysqli_query($conexion, "select * from usuario") or die ("Erros al traer los datos");

	echo '<table border="1">';
	echo '<tr>';
	echo '<th id="nombre">primer_nombre</th>';
	echo '<th id="apellido">primer_apellido</th>';
	echo '<th id="identificacion">numero_identificacion</th>';
	echo '</tr>';

	while($extraido = mysqli_fetch_array($consulta)){
		echo '<tr>';
		echo '<td>'. $extraido['primer_nombre'].'</td>';
		echo '<td>'. $extraido['primer_apellido'].'</td>';
		echo '<td>'. $extraido['numero_identificacion'].'</td>';
	}
	mysqli_close($conexion);
	echo '</table>';
	?>

	
</body>
</html>