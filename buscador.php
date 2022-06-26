<?php 
require_once 'conexion.php';
require_once 'header.php';
require_once 'iniciosesion.php';
$query= "SELECT * FROM producto JOIN precio ON precio.id_Precio = producto.id_Precio 
        WHERE Prod_Nombre LIKE '%".$_POST['busqueda']."%'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
?>
<table class="table">
  <thead>
    <tr>
      <td>Nombre</td>
      <td>Stock disponible</td>
      <td>Precio</td>
      <td>Añadir</td>
    </tr>
  </thead>
  <tbody>
    <?php
    if($result = mysqli_query($db,$query)){
        
    while($row = mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<td>';
            echo '<a class="text-black text-decoration-none" href="showproducto.php?idproducto='.$row['id_Producto'].'&idusu='.$idusu.'">';
            echo $row['Prod_Nombre'];
        echo '</a>';'</td>';
        echo '<td>';
            echo $row['stock'];
        echo '</td>';
        echo '<td>';
            echo $row['Prec_Precio'];
        echo '</td>';
        echo '<td>';
            if($row['stock'] != 0){
            echo '<a href="add_to_cart.php?id= '.$row['id_Producto'].'">Añadir al carrito';
            echo '</a>';
            }
        echo '</td>';
        echo '</tr>';
    }
}

    mysqli_close($db);
        ?>
      
  </tbody>
</table>
<a href="javascript:history.back(1)">Volver</a><br>