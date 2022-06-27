<?php require_once 'conexion.php';
      require_once 'iniciosesion.php';
?>

<!-- Inicio de la pg -->

<!DOCTYPE HTML>
<HTML lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name= "viewport" content="width=device-width, initial-scale=1"/>
    <!-- Agregar titulo -->
    <title> Baby Fashion </title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  </head>

<?php require_once 'portada2.php';?>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="">BABY FASHION </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" align-rigth href="cerrar.php">CERRAR SESION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" align-rigth href="historial.php?idusu=<?php echo $idusu; ?>">HISTORIAL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" align-rigth href="cart.php?idusu=<?php echo $idusu; ?>">CARRITO DE COMPRAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" align-rigth href="portada2.php?idusu=<?php echo $idusu; ?>"> <?php $name = $row['CI_Nombre']; echo $name; ?></a>
            </li>
        </ul>
    </nav>
</body>
 

        <!--/Productos -->
        <nav id="productos">
          <h1>  </h1>
          <div class= "row">
          <div class= "col s8 offset-s2" >
            <table style="margin: 0 auto;">
              <thead>
                <tr align= 'center'>
                  <th> <a href="Alquiler.php?idusu=<?php echo $idusu; ?>"> Alquiler </a> </th> <th> </th> <th> </th> <th> </th> <th> </th> <th> </th> <th> </th>
                  <th> <a href="Venta.php?idusu=<?php echo $idusu; ?>">Venta </a> </th>
                </tr>
              </thead>
              <tbody>
              <tr align= 'center'>
                  <td><a href="Alquiler.php?idusu=<?php echo $idusu; ?>"> <img src="./imagenes/alquiler.png" width="250px" height="250px"> </a> </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td> <td>  </td>
                  <td><a href="Venta.php?idusu=<?php echo $idusu; ?>"><img src="./imagenes/venta.png" width='250px' height='250px'></a> </td>
                </tr>
              </tbody>
            </table>

            <table style="margin: 0 auto;">
              <thead>
                <tr align= 'center'>
                  <th> <a href="xiaomi.php?idusu=<?php echo $idusu; ?>"> Compra </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td><a href="xiaomi.php?idusu=<?php echo $idusu; ?>"> <img src="./imagenes/compra.png" width="250px" height="250px"/></a></td>
                  
                </tr>
              </tbody>
            </table>

        <div class="clearfix"></div>

      </header>
  </body>