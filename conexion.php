<?php
// Definir variables
//Conexion a la base de datos
    $host = getenv("PHP_MYSQL_HOST");
    $user = getenv("PHP_MYSQL_USER");
    $clave = getenv("PHP_MYSQL_PASSWORD");
    $bd = "sin_grupo_9";
    $db = mysqli_connect($host,$user,$clave,$bd);

?>
