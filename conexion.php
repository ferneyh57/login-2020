<?php
$mysqli = new mysqli("localhost", "root", "", "login");



  
 

    
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

  
  $Consultar = $mysql->efectuarConsulta("select bancoviernes.usuario.id_usuario,bancoviernes.usuario.primer_nombre,bancoviernes.usuario.primer_apellido,bancoviernes.usuario.contra
  from bancoviernes.usuario
  where bancoviernes.usuario.contra ='".$contra."'and bancoviernes.usuario.email = '".$email."' " 
 );
        
 
  if(!empty($Consultar)){
      
      if(mysqli_num_rows($Consultar) > 0){
         
          while ($resultado = mysqli_fetch_assoc($Consultar)){
            
            
            $id_usuario= $resultado["id_usuario"];
            $contrasena= $resultado["contra"];
            $primer_nombre= $resultado["primer_nombre"];
            $primer_apellido= $resultado["primer_apellido"];






           
           header( "refresh:3;url=index.php" );
            
          }
          session_start();//Inicio de sesion
          $_SESSION['nombre']=$primer_nombre.' '.$primer_apellido;
          $_SESSION['id']=$id_usuario;
          $_SESSION['contrasena']=$contrasena;
          
          }

   
         
            
     

        
  
  }
  
  
        
        }
          
  ?>





