<?php
session_start();
include('conexion.php');
$header_html = '<html>
    <head>
        <title>SIN - 2022-I</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>';
    if(isset($_SESSION["user_connected_id"])){
      $sql = "SELECT * FROM cliente where id_Cliente = '".$_SESSION["user_connected_id"]."'";
      $result = mysqli_query($db, $sql);
      $user = mysqli_fetch_array($result);
      echo "&nbsp; ";}

$footer_html ='</body>
  </html>';
?>