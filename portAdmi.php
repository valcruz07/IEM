<?php require_once 'conexion.php';?>

<!-- Inicio de la pg -->

<!DOCTYPE HTML>
<HTML lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name= "viewport" content="width=device-width, initial-scale=1"/>
    <!-- Agregar titulo -->
    <title> ElectroShop </title>
    <link rel="stylesheet" type="text/css" href="estilos.css"
  </head>
  
  <body style="background-color:#08E7EE;">

<?php require_once 'portAdmi.php';?>
      <!--Cabecera -->
      <header id="cabecera">
        <div id="logo">
          <a href="portada.php">
            <h1> ElectroShop </h1>
          </a>
        </div>
        <!--/Menu -->
        <nav id="menu">
        <br/>
        <br/>
          <ul>
            <li>
              <a href="cerrar.php"> Cerrar Sesión </a>
            </li>
            <li>
              <a href="localesAdmi.php"> Locales </a>
            </li>
            <li>
              <a href="clientes.php"> Clientes </a>
            </li>
            <li>
              <a href="index.php"> Valeria </a>
            </li>
          </ul>
        </nav>

        <!--/Productos -->
        <nav id="productos">
          <h1>  </h1>
          <div class= "row">
          <div class= "col s8 offset-s2" >
            <table style="margin: 0 auto;">
              <thead>
                <tr align= 'center'>
                  <th> <a href="Apple.php"> Apple </a> </th>
                  <th> <a href="Lenovo.php">Lenovo </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td><a href="Apple.php"> <img src="./imagenes/apple.png" width="250px" height="250px"/></a></td>
                  <td><a href="Lenovo.php"><img src="./imagenes/lenovo.png" width="400px" height="90px"/></a></td>
                </tr>
              </tbody>
            </table>

            <table style="margin: 0 auto;">
              <thead>
                <tr align= 'center'>
                  <th> <a href="Xiaomi.php"> Xiaomi </a> </th>
                  <th> <a href="HP.php"> HP </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td><a href="Xiaomi.php"> <img src="./imagenes/xiaomi.png" width="300px" height="200px"/></a></td>
                  <td><a href="HP.php"><img src="./imagenes/hp.png" width="300px" height="200px"/></a></td>
                </tr>
              </tbody>
            </table>

        <div class="clearfix"></div>

      </header>
  </body>
