<?php
$mysqli = new mysqli("localhost", "root", "", "login");
session_start();


  
 

    
 
  require_once 'MySQL.php';
  $mysql = new MySQL;
  $monto = $mysqli -> real_escape_string($_POST['monto']);
  $destino = $mysqli -> real_escape_string($_POST['cedula']);
  //$email = strip_tags($_POST['email']);
  $contra = $mysqli -> real_escape_string(md5($_POST['pass']));
  //$email = strip_tags($_POST['pass']);
  
  $mysql->conectar();

  
  $Consultar = $mysql->efectuarConsulta("select bancoviernes.usuario.dinero_cuenta,bancoviernes.usuario.contra
  from bancoviernes.usuario
  where bancoviernes.usuario.numero_identificacion ='".$destino."' and bancoviernes.usuario.id_usuario ='". $_SESSION['contrasena']."' " 
 );
        
 
  if(!empty($Consultar)){
      
      if(mysqli_num_rows($Consultar) > 0){
         
          while ($resultado = mysqli_fetch_assoc($Consultar)){
            
            







           
           
            
          }

          
          }