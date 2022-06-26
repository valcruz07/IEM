<?php require_once 'conexion.php';
if (isset($_GET['idusu'])){
$idusu = $_GET['idusu'];
$sql = "SELECT * from cliente where id_Cliente = '".$idusu."'";
$resul = mysqli_query($db,$sql);
$row = mysqli_fetch_array($resul);
}else {
    $idusu = NULL;
}
?>