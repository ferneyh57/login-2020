<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
	?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>banco</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.css">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<div class="jumbotron">
				<h2>
					BIENVENIDO  <?php
	echo $_SESSION['nombre'];
	?>
				</h2>
				<p>
					Somos la pagina web mas sencilla y segura de cootecnova.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="login.php">logout</a>
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h2>
				Recargar dinero
			</h2>
			<p>
				Desde este apartado puedes 
				cargar dinero a la pagina miediante tu tarjeta.
			</p>
			<p>
				<a class="btn" href="recargar.php">go »</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Enviar dinero
			</h2>
			<p>
				Aqui se puede enviar dinero a otras personas que esten registradas en la pagina.
			</p>
			<p>
				<a class="btn" href="enviar.php">go »</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Consultar transacciones
			</h2>
			<p>
				Desde aqui podemos ver todos los datos de las transacciones que hemos hecho.
			</p>
			<p>
				<a class="btn" href="transacciones.php">ver usuarios registrados »</a>
			
			</p>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>