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
    primer_nombre,
    primer_apellido,
    email,
    userr,
    
    numero_tarjeta,
    contra
    ) 
    VALUES(   
    '".$nombre. "', '" .$apellido. "','" .$email. "', '" .$User. "', '" .$numerot. "', '" .$contrasena. "' )"); 
        
 
  if(!empty($Consultar)){
      
      if(mysqli_num_rows($Consultar) > 0){
         
          while ($resultado = mysqli_fetch_assoc($Consultar)){
             
            
          
             
            
          }

          }

          }
          
         
  ?>