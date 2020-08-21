<?php
$mysqli = new mysqli("localhost", "root", "", "login");


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if( isset($_POST['sub'])   && !empty($_POST['sub']))
  {

  
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
             
            $validar=true;
             
            
          }

          }

          }
          
          if($validar=true)
          {
            echo "bienvenido";
            header( "refresh:3;url=login.php" );
          }
          else if($validar=false){
            echo "error, email o contraseña invalida";
            header( "refresh:3;url=login.php" ); 
          }
          }
          else{
            echo "error en el checkbox";
            header( "refresh:3;url=login.php" ); 
          }
        }
        }
  
        
          
  ?>