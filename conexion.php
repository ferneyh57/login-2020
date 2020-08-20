<?php
$mysqli = new mysqli("localhost", "root", "", "login");
    if(isset($_POST['email'])   && !empty($_POST['email'])
    && isset($_POST['pass']) && !empty($_POST['pass'] )){
  require_once 'MySQL.php';
  $mysql = new MySQL;
  $email = $mysqli -> real_escape_string($_POST['email']);
  $contra = $mysqli -> real_escape_string(md5($_POST['pass']));
  $mysql->conectar();

  $Consultar = $mysql->efectuarConsulta("select login.validacion.id
  from login.validacion 
  where login.validacion.password ='".$contra."' and login.validacion.email = '".$email."' " 
 );
        
 
  if(!empty($Consultar)){
      
      if(mysqli_num_rows($Consultar) > 0){
         
          while ($resultado = mysqli_fetch_assoc($Consultar)){
             
            
            header( "refresh:3;url=login.php" ); 
           
          }
          
          }
          
          }

          }
  ?>