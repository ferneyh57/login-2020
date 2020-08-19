<?php
  require_once 'MySQL.php';
  $mysql = new MySQL;
  $email = $_POST['email'];
  $contra = md5($_POST['pass']);
  $mysql->conectar();

  $Consultar = $mysql->efectuarConsulta("select");
            
 
  if(!empty($Consultar)){
      
      if(mysqli_num_rows($Consultar) > 0){
         
          while ($resultado = mysqli_fetch_assoc($Consultar)){
             
            header("location: login.php");
            die();
          }
  ?>