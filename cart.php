
       <?php
       include 'header1.php';
       require_once 'conexion.php';
       require_once 'iniciosesion.php';
       echo $header_html;
        ?>
        <div class="container-fluid p-5 bg-primary text-white text-center">
        <link rel="stylesheet" type="text/css" href="estcarrito.css">
        <header id="cabecera">
        <div id="logo">
          <a href="portada2.php?idusu=<?php echo $idusu; ?>">
            <h1> ElectroShop </h1>
          </a>
        </div>
        <!--/Menu -->
        <nav id="menu">
        <br/>
        <br/>
          <ul>
            <li>
              <a href="portada2.php?idusu=<?php echo $idusu; ?>"> Regresar </a>
            </li>
          </ul>
        </nav>
          <h1>CARRITO DE COMPRAS</h1>
        </div>
        <table class="table">
          <thead>
            <tr >
              <td><H3>Producto</H3></td>
              <td><H4>Cantidad</H4></td>
              <td><H4>Precio Unitario</H4></td>
              <td>&nbsp;</td>
            </tr>
          </thead>
        <tbody>
          <?php
          $counter = 0;
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
            $counter++;
          }
          }

          ?>
        </tbody>
        </table>
        <?php
        if($counter != 0) {
        ?>
        <a href = "eleccionlocal.php?idusu=<?php echo $idusu; ?>"><button type="button" class="btn btn-success">Ir a pagar</button></a>
        <?php } ?>
        <a href="javascript:history.back(1)"><button type="button" class="btn btn-info">Volver</button></a>
        <?php echo $footer_html; ?>