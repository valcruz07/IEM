<?php
require_once 'iniciosesion.php';
$idprodcto = $_GET['id'];
session_start();

if(isset($_SESSION["cart"][$_GET["id"]])){
  $_SESSION["cart"][$_GET["id"]]["qty"]++;
}else{
  $_SESSION["cart"][$_GET["id"]]["qty"] = 1;
}
$_SESSION["alert"] = 'Producto añadido al carrito correctamente. ';
header('location:javascript:history.back(1)')

 ?>
