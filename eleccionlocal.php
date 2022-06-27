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
    <title> ElectroShop </title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  </head>

<?php require_once 'eleccionlocal.php';?>

        <!--/Menu -->
        <nav class="navbar navbar-expand navbar-dark bg-primary">
        <ul class="nav navbar-nav">
            <?php
              if($idusu == NULL){
            ?>
            <li>
              <a class="nav-link" href="sesion.php"> Iniciar Sesión </a>
            </li>
            <li>
              <a class="nav-link" href="index.php"> Inicio </a>
            </li>
            <?php
              }else{
            ?>
            <li>
              <a class="nav-link" href="cart.php?idusu=<?php echo $idusu; ?>"> Carrito de compras </a>
            </li>
            <li>
              <a class="nav-link" href="portada2.php?idusu=<?php echo $idusu; ?>"> <?php $name = $row['CI_Nombre']; echo $name; ?> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" align-rigth href="cerrar.php">CERRAR SESION</a>
            </li>
            <?php
            }
            ?>
          </ul>
    </nav>
        <div id= "buscador" class="bloque" >
          <h3> </h3>
        <br/>
        <br/>
        <br/>


<!----------CREACION DE LA TABLA----------->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Local</th>
      <th scope="col">Dirección</th>
      <th scope="col">Codigo Postal</th>

      <!-- EN LA COLUMNA DE ELEGIR SE DEBE DE CREAR EL BOTON PARA SELECCIONAR EL LOCAL-->
      
      <th scope="col">Elegir</th>
    </tr>
  </thead>  
  <tbody>
  <?php
            $consult = "SELECT * FROM locales";
            $result = mysqli_query($db, $consult);
            $local = mysqli_fetch_array($result);

            if ($result = mysqli_query($db, $consult)) {
                while ($local = mysqli_fetch_array($result)) {
            ?>
    <tr>
      <th scope="row"><?php echo $local['Loc_Nombre']; ?>
</th>
      <td><?php echo $local['Loc_Direccion']; ?>
</td>
      <td><?php echo $local['Loc_CodPostal']; ?>
</td>

      <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->
      
      <td>
            <a href="Compra.php?id=<?php echo $local['id_Locales'].'&idusu='.$idusu?>">Seleccionar</a>
      </td>
      <?php
                }
            }
            ?>
    </tr>
  </tbody>
</table>