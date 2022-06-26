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
                <a class="nav-link" href="index.php">ELECTROSHOP </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" align-rigth href="index.php">INICIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" align-rigth href="sesion.php">INICIAR SESION</a>
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
                  <th> <a href="Apple.php?idusu=<?php echo $idusu; ?>"> Apple </a> </th>
                  <th> <a href="Lenovo.php?idusu=<?php echo $idusu; ?>">Lenovo </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td><a href="Apple.php?idusu=<?php echo $idusu; ?>"> <img src="./imagenes/apple.png" width="250px" height="250px"/></a></td>
                  <td><a href="Lenovo.php?idusu=<?php echo $idusu; ?>"><img src="./imagenes/lenovo.png" width="400px" height="90px"/></a></td>
                </tr>
              </tbody>
            </table>

            <table style="margin: 0 auto;">
              <thead>
                <tr align= 'center'>
                  <th> <a href="Xiaomi.php?idusu=<?php echo $idusu; ?>"> Xiaomi </a> </th>
                  <th> <a href="HP.php?idusu=<?php echo $idusu; ?>"> HP </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td><a href="Xiaomi.php?idusu=<?php echo $idusu; ?>"> <img src="./imagenes/xiaomi.png" width="300px" height="200px"/></a></td>
                  <td><a href="HP.php?idusu=<?php echo $idusu; ?>"><img src="./imagenes/hp.png" width="300px" height="200px"/></a></td>
                </tr>
              </tbody>
            </table>

        <div class="clearfix"></div>

      </header>
  </body>
