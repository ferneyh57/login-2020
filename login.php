<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="global.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login</title>
</head>

<body>
  <section class="container-fluid bg">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
      <form class="form-container" method="post" action="conexion.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
      </section>
    </section>
  </section>
  

  <script src="bootstrap-4.5.2-dist/js/bootstrap.js"></script>
</body>

</html>