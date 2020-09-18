<!DOCTYPE html>
<html lang="en">
<?php
session_start();
    //llamamos la clase
  require_once 'MySQL.php';
    //pasamos los valores de la clase a la variable
  $mysql = new MySQL;
      //realizamos la conexion
  $mysql->conectar();
//realizamos una consulta con los valores que vamos a utilizar
  /*$tipo_tarjeta= $mysql->efectuarConsulta("SELECT 
  bancoviernes.tipo_tarjeta.id_tipo_tarjeta , bancoviernes.tipo_tarjeta.nombre_tarjeta
  from bancoviernes.tipo_tarjeta where id_usuario = ".$_SESSION['id']."");*/

$tarjeta= $mysql->efectuarConsulta("SELECT 
bancoviernes.usuario.numero_tarjeta 
from bancoviernes.usuario where id_usuario = ".$_SESSION['id']."");
 
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


      <form class="form-container" method="POST"action="registro.php">
  

      <div class="form-group">
        <label for="exampleInputEmail1">cantidad</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad" aria-describedby="emailHelp" required>
        
      </div>


      <div class="form-row">
 

      </div>
      <div class="form-group " >
        <label class="col-form-label">tarjeta</label>
        <select name="tipotarjeta" class="form-control" >
        <!-- creamos un arreglo con los datos de tipo documento-->
          <?php while ($resultado=mysqli_fetch_assoc($tarjeta)){?> 
            <!-- mostramos los datos que tenemos en el areglo-->
          <option value="<?php echo $resultado['numero_tarjeta'] ?>"><?php echo $resultado['numero_tarjeta'] ?></option>
          <?php
          }
          ?>
        </select>
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