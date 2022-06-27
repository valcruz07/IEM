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
    <title> ElectroShop </title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  </head>
  
  <body>

<?php require_once 'index.php';?>


      <!--Cabecera -->
      <header id="cabecera">
      <body>
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">BABY FASHION </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" align-rigth href="index.php">INICIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" align-rigth href="sesion.php">INICIAR SESION</a>
            </li>
        </ul>
    </nav>
    </header>
    <header style= "text-align: center;" class = "loguito">
        <img src="imagenes/LogoVenta.png" >
        </header>

<header>
</body>

        <!--/Productos -->
        <nav id="productos">
          <h1>  </h1>
          <div class= "row">
          <div class= "col s8 offset-s2" >
            <table style="margin: 0 auto;">
              <thead>
                <tr align= 'center'>
                  <th> <a href="Alquiler.php?idusu=<?php echo $idusu; ?>"> Alquiler </a> </th> <th> </th> <th> </th> <th> </th> <th> </th> <th> </th> <th> </th> <th> </th>
                  <th> <a href="Venta.php?idusu=<?php echo $idusu; ?>">Venta </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td><a href="Alquiler.php?idusu=<?php echo $idusu; ?>"> <img src="./imagenes/alquiler.png" width="250px" height="250px"/></a></td> <td> </td> <td> </td> <td> </td> <td> </td> <td> </td> <td> </td> <td> </td> 
                  <td><a href="Venta.php?idusu=<?php echo $idusu; ?>"><img src="./imagenes/venta.png" width="250px" height="250px"/></a></td>
                </tr>
              </tbody>
            </table>

            <table style="margin: 0 auto;">
              <thead>
                <tr align= 'center'>
                  <th> <a href="Xiaomi.php?idusu=<?php echo $idusu; ?>"> Compra </a> </th>
                  
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td><a href="Xiaomi.php?idusu=<?php echo $idusu; ?>"> <img src="./imagenes/compra.png" width="250px" height="250px"/></a></td> 
                  
                </tr>
              </tbody>
            </table>

        <div class="clearfix"></div>

      </header>
  </body>
