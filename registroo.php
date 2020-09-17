<!DOCTYPE html>
<html lang="en">
<?php
    //llamamos la clase
  require_once 'MySQL.php';
    //pasamos los valores de la clase a la variable
  $mysql = new MySQL;
      //realizamos la conexion
  $mysql->conectar();
//realizamos una consulta con los valores que vamos a utilizar
  $tipotarjeta= $mysql->efectuarConsulta("SELECT 
  bancoviernes.tipo_tarjeta.id, bancoviernes.tipo_tarjeta.tipo 
  from bancoviernes.tipo_tarjeta");
 
  ?>
<head>
  <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Registro</title>
</head>

<body >
  <section class="container-fluid bg">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">


      <form class="form-container" method="POST"action="">
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="exampleInputNombre">Primer nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required="">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputApellido">Primer apellido</label>
        <input type="text" class="form-control" id="Apellido" name="Apellido" required="">
      </div>
  </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
        
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">User</label>
        <input type="text" class="form-control" id="User" name="User" required>
      </div>

      <div class="form-row">
      <div class="form-group col-md-6" >
        <label class="col-form-label">Tipo tarjeta</label>
        <select name="tipotarjeta" class="form-control" >
        <!-- creamos un arreglo con los datos de tipo documento-->
          <?php while ($resultado=mysqli_fetch_assoc($tipotarjeta)){?> 
            <!-- mostramos los datos que tenemos en el areglo-->
          <option value="<?php echo $resultado['id'] ?>"><?php echo $resultado['tipo'] ?></option>
          <?php
          }
          ?>
        </select>

      </div>
      <div class="form-group col-md-6" >
          <label for="exampleInputNtarjeta">Numero Tarjeta</label>
          <input minlength="14" type="text" class="form-control" id="Ntarjeta" name="Ntarjeta" required pattern="[0-9]+">
          
        </div>
      </div>

      </div>


      <div class="form-row">
            <div class="form-group col-md-12">
            <label for="exampleInputPassword1">Password</label>
            <input minlength="4" maxlength="10" type="password" class="form-control" id="pass" name="pass" required>
          </div>

      <!--    <div class="form-group col-md-6 form-check">
            <input type="checkbox" class="form-check-input"  name="check" >
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
        -->

          <button   type="Submit" class="btn btn-primary">Submit</button>
      </div>
      
    </form>
      </section>
    </section>
  </section>
  
  <script src="app.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script src="bootstrap-4.5.2-dist/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
</body>

</html>