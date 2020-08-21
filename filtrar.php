<?php
require_once 'class.inputfilter.php';
$filtro = new InputFilter();
$email = $filtro->process($_POST['email']);
$contra = $filtro->process(md5($_POST['email']));

?>