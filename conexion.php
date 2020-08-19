<?php
  require_once 'MySQL.php';
  $mysql = new MySQL;
  $email = $_POST['email'];
  $contra = md5($_POST['pass']);
  $mysql->conectar();
  ?>