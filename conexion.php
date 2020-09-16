<?php
$mysqli = new mysqli("localhost", "root", "", "login");

$validar=0;
$campos=2;

  
  if( isset($_POST['check'])   && !empty($_POST['check']))
  {

    echo "entro";
    if(isset($_POST['email'])   && !empty($_POST['email'])
    && isset($_POST['check'])   && !empty($_POST['check'])
    && isset($_POST['pass']) && !empty($_POST['pass'] )){
  require_once 'MySQL.php';
  $mysql = new MySQL;
  $email = $mysqli -> real_escape_string($_POST['email']);
  //$email = strip_tags($_POST['email']);
  $contra = $mysqli -> real_escape_string(md5($_POST['pass']));
  //$email = strip_tags($_POST['pass']);
  $mysql->conectar();

  
  $Consultar = $mysql->efectuarConsulta("select login.validacion.id
  from login.validacion 
  where login.validacion.password ='".$contra."' and login.validacion.email = '".$email."' " 
 );
        
 
  if(!empty($Consultar)){
      
      if(mysqli_num_rows($Consultar) > 0){
         
          while ($resultado = mysqli_fetch_assoc($Consultar)){
             
            
            $validar++;
             
            
          }

          }

          }
          
          if($validar==$campos)
          {
            echo "bienvenido";
            header( "refresh:3;url=login.php" );
          }
          else {
            echo "error, email o contraseña invalida";
            header( "refresh:3;url=login.php" ); 
          }
          

        
  
  }
  
  }
        
          
  ?>