<!DOCTYPE html>
<html lang="en">

<?php
session_start();
  if(!isset($_SESSION['id'])){
  session_destroy();
  session_unset();
  }
  ?>
<head>
  <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login</title>
</head>

<body >
  <section class="container-fluid bg">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
      <form class="form-container" method="POST"action="conexion.php">
      
  <div class="form-group">
    <label for="exampleInputEmail1">User</label>
    <input type="text" class="form-control" id="email" name="email" id="email" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
  <div class="form-row">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input"  name="check" >
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    <a href="registroo.php">registrarse</a>
  </div>
</div>
  <button   type="submit" class="btn btn-primary" onclick="funcion()">Submit</button>
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




   