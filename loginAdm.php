<?php

include('conexion.php');

$EMAIL=$_POST['usuario'];
$PASSWORD=$_POST['password'];

$consult = "SELECT* FROM administrador where Adm_Correo = '$EMAIL' and Adm_Contraseña = '$PASSWORD' ";
$result= mysqli_query($db, $consult);
$fils=mysqli_num_rows($result);


if($fils && isset($_POST['usuario']) && !empty($_POST['usuario']) && filter_var($EMAIL, FILTER_VALIDATE_EMAIL) ){
    header("location:portAdmi.php");
}else{ 
    
    include("alertas.html");
    
}
mysqli_free_result($result);
mysqli_close($db);

?>