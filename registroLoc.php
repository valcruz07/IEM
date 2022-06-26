<?php

require_once 'registroLoc.php';
require_once 'conexion.php';
echo var_dump($_POST);
echo var_dump($_SESSION);
$local=(isset($_POST['local']) ? $_POST['local'] : false);
$direccion=(isset($_POST['direccion']) ? $_POST['direccion'] : false);
$postal=(isset($_POST['postal']) ? $_POST['postal'] : false);
$errores= [];

if(isset($_POST['submit'])) {

  //Validamos
  //Array de errores

  if (!empty ($local) && !is_numeric($local) && !preg_match("/(0-9)/",$local)){
    $local_validar= true;
  }else{
    $local_validar= false;
    $errores[]= 1;
  }

  if (!empty ($direccion) && !is_numeric($direccion) && !preg_match("/(0-9)/",$direccion)){
    $direccion_validar= true;
  }else{
    $direccion_validar= false;
    $errores[]= 1;
  }

  if (!empty ($postal) && is_numeric($postal)){
    $postal_validar= true;
  }else{
    $postal_validar= false;
    $errores[]= 1;
  }

  $guardar_usuario= false;
  print_r($errores);
  if (count($errores)==0){
    $sql = "INSERT INTO locales (Loc_Nombre, Loc_Direccion, Loc_CodPostal)
    VALUES ('".$local."', '".$direccion."', '".$postal."')";
    $result = mysqli_query($db, $sql);
    header('location:localesAdmi.php');
  }

}
?>