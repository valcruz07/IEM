<?php 
require_once 'Alquiler.php';
include 'conexion.php';
require_once 'iniciosesion.php';
?>

<link rel="stylesheet" type="text/css" href="estproductos.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<!DOCTYPE HTML>
<HTML lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name= "viewport" content="width=device-width, initial-scale=1"/>
    <!-- Agregar titulo -->
    <title> BabyFashion | Alquiler </title>
    </head>
  <body>
    <header>
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
            <?php
            }
            ?>
          </ul>
    </nav>
      
        <h3 class = "subtitulo"> PRODUCTOS EN ALQUILER </h3>
    </header>
      <div class ="productos">
        <div class = "text-centrado">
          <div class = "row">

            <?php
            $consult = "SELECT * FROM producto 
            JOIN prod_marca ON producto.id_Producto = prod_marca.id_Producto 
            JOIN marca ON marca.Id_Marca = prod_marca.Id_Marca 
            JOIN precio ON precio.id_Precio = producto.id_Precio
            WHERE marca.Nombre='Alquiler'";
            $result = mysqli_query($db, $consult);
            $product = mysqli_fetch_array($result);

            if ($result = mysqli_query($db, $consult)) {
                while ($product = mysqli_fetch_array($result)) {
            ?>
            <div class = "col-xs-9 col-sm-5 col-md-4 product">
                <div class = "card">
                  <div class = "text-centrado">
                    <img src="imagenes/Producto <?php echo $product['id_Producto']; ?>.jpeg" alt ="Imagen Producto <?php echo $product['id_Producto']; ?>">
                    <h5 > <?php echo $product['Prod_Nombre']; ?> </h5>

                    <div class="container mt-5">
                     <div class="row">
                        <div class="col-sm-6">
                          <div class="row">
                           <div class="col-sm-8">Precio: </div>
                            <div>
                            S/. <?php echo number_format($product['Prec_Precio'], 2, '.', ','); ?>
                            </div>
                            <div>
                             Stock: <?php echo $product['stock'] ?>
                            </div>
                            <?php 
                            if ($idusu != NULL && $product['stock'] != 0){
                            ?>
                            <a href = "add_to_cart.php?id= <?php echo $product['id_Producto']; ?>"
                             class = "boton-ad-car"> Añadir al carrito </a>
                            <?php
                            }
                            ?>
                          </div>
                        </div>
                     </div>
                    </div>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
            </div>
        </div>
            </div>
