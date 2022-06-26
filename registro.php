<?php

require_once 'registro.php';
require_once 'conexion.php';
echo var_dump($_POST);
echo var_dump($_SESSION);
$nombre=(isset($_POST['nombre']) ? $_POST['nombre'] : false);
$Apellido=(isset($_POST['Apellido']) ? $_POST['Apellido'] : false);
$email=(isset($_POST['email']) ? $_POST['email'] : false);
$celular=(isset($_POST['celular']) ? $_POST['celular'] : false);
$password=(isset($_POST['password']) ? $_POST['password'] : false);
$password_encriptada = md5($_POST['password']);
$errores= [];

if(isset($_POST['submit'])) {

  //Validamos
  //Array de errores

  if (!empty ($nombre) && !is_numeric($nombre) && !preg_match("/(0-9)/",$nombre)){
    $nombre_validar= true;
  }else{
    $nombre_validar= false;
    $errores[]= 1;
  }

  if (!empty ($Apellido) && !is_numeric($Apellido) && !preg_match("/(0-9)/",$Apellido)){
    $Apellido_validar= true;
  }else{
    $Apellido_validar= false;
    $errores[]= 1;
  }

  if (!empty ($celular) && is_numeric($celular)){
    $celular_validar= true;
  }else{
    $celular_validar= false;
    $errores[]= 1;
  }

  if (!empty ($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_validar= true;
  }else{
    $email_validar= false;
    $errores[]= 1;
  }

  IF(!empty ($password)){
    $password_validar= true;
  }else{
    $password_validar= false;
    $errores[]= 1;
  }

  $guardar_usuario= false;
  print_r($errores);
  if (count($errores)==0){
    $sql = "INSERT INTO cliente (CI_Nombre, CI_Apellido, CI_Correo, CI_Contraseña, CI_Celular)
    VALUES ('".$nombre."', '".$Apellido."', '".$email."', '".$password_encriptada."', '".$celular."')";
    $result = mysqli_query($db, $sql);
    header('location:sesion.php');
  }

}
?>