<?php require_once 'conexion.php';
      require_once 'iniciosesion.php';
//Llamamos a los pedidos
?>

<!-- Inicio de la pg -->

<!DOCTYPE HTML>
<HTML lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name= "viewport" content="width=device-width, initial-scale=1"/>
    <!-- Agregar titulo -->
    <title> Historial </title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>
  <body style="background-color:#08E7EE;">

      <!--Cabecera -->
      <header id="cabecera">
        <div id="logo">
          <a href="historial.php">
            <h1> ElectroShop </h1>
          </a>
        </div>
        <!--/Menu -->
        <nav id="menu">
          <ul>
            <li>
              <a href="cerrar.php"> Cerrar Sesión </a>
            </li>
            <li>
              <a href="history.php"> Historial </a>
            </li>
            <li>
              <a href="cart.php?idusu=<?php echo $idusu; ?>"> Carrito de compras </a>
            </li>
            <li>
              <a href="portada2.php?idusu=<?php echo $idusu; ?>"> <?php $name = $row['CI_Nombre']; echo $name; ?> </a>

            </li>
          </ul>
        </nav>
        <div id= "buscador" class="bloque" >
          <h3> </h3>
          <center>
          <form action= "buscador.php" method="POST">
            <input type= "text" name= "busqueda" />
            <input type= "submit" value= "Buscar" />
          </form>
          </center>
        </div>

        <table class="table">
          <thead>
            <tr>
              <td>Fecha</td>
              <td>Producto</td>
              <td>Cantidad</td>
              <td>Precio Unitario</td>
              <td>&nbsp;</td>
            </tr>
          </thead>
        <tbody>
          <?php
          $consult = "SELECT * FROM ";
          
          if(isset($_SESSION)){
          foreach ($_SESSION["cart"] as $key => $value) {
            $sql = "SELECT * FROM producto JOIN precio ON precio.id_Precio = producto.id_Precio WHERE id_Producto = ".$key;
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($result);
            echo '<tr>';
              echo '<td>';
                echo $row['Prod_Nombre'];
              echo '</td>';
              echo '<td>';
                echo $value["qty"];
              echo '</td>';
              echo '<td>';
              echo number_format($row['Prec_Precio'],2,'.',',');
              echo '</td>';
              echo '<td>';
                echo '<a href="remove_from_cart.php?id='.$key.'&idusu='.$idusu.'">Disminuir</a>&nbsp;&nbsp;';
                echo '<a href="remove_from_cart.php?remove_all=1&id='.$key.'&idusu='.$idusu.'">Eliminar</a>';
              echo '</td>';
            echo '</tr>';
          }
          }

          ?>
        </tbody>
        </table>

  </body>
