<?php
$mysqli = new mysqli("localhost", "root", "", "login");

$nombre= $_POST['nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['email'];
$User = $_POST['User'];//cc
$tipot = $_POST['tipotarjeta'];
$numerot = $_POST['Ntarjeta'];
//md5 se usa para encriptar
$contrasena = md5($_POST['pass']);


  

  require_once 'MySQL.php';
  $mysql = new MySQL;

  //$email = strip_tags($_POST['email']);
 
  //$email = strip_tags($_POST['pass']);
  $mysql->conectar();

  
  $insertar= $mysql->efectuarConsulta("insert into 
  bancoviernes.usuario
    ( 
      bancoviernes.usuario.primer_nombre,
      bancoviernes.usuario.primer_apellido,
      bancoviernes.usuario.email,
      bancoviernes.usuario.numero_identificacion,
      bancoviernes.usuario.tipo_tarjeta_id,
      bancoviernes.usuario.numero_tarjeta,
      bancoviernes.usuario.contra
    ) 
    VALUES(   
    '".$nombre. "', '" .$apellido. "','" .$email. "', '" .$User. "','" .$tipot. "', '" .$numerot. "', '" .$contrasena. "' )"); 
        
    
  if(!empty($Consultar)){
    
      if(mysqli_num_rows($Consultar) > 0){
         
          while ($resultado = mysqli_fetch_assoc($Consultar)){
             
            
          
             
            
          }

          }

          }
          
         
  ?>