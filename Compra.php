<?php require_once 'conexion.php';
      require_once 'iniciosesion.php';
?>
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


      <!--Cabecera -->
      <header id="cabecera">
        <div id="logo">
          <a href="portada2.php">
            <h1> ElectroShop </h1>
          </a>
        </div>
        <!--/Menu -->
        <br/>
        <br/>
        <nav id="menu">
          <ul>
            <li>
              <a href="cerrar.php"> Cerrar Sesión </a>
            </li>
            <li>
              <a href="historial.php"> Historial </a>
            </li>
            <li>
              <a href="carrito.php"> Carrito de compras </a>
            </li>
            <li>

            </li>
            <li>
              <a href="portada2.php?idusu=<?php echo $idusu; ?>"> <?php $name = $row['CI_Nombre']; echo $name; ?> </a>
            </li>
          </ul>
        </nav>

        <center>
            <form id="card-form">
                
                            <div class="card">
                    <div class="card-header">
                        <div class="row display-tr">
                            <br/><br/><br/><h3><H1>PAGO EN LÍNEA</H1></h3>
                                <link rel="stylesheet" type="text/css" href="estcompra.css"

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label >
                                    <H2>Nombre del dueño de la tarjeta</H2>
                                </label>
                                <input value="" class="form-control" name="name" id="name"  type="text" >
                            </div>
                            <div class="col-md-6">
                                    <label>
                                    <H2>Número de tarjeta</H2>
                                    </label>
                                    <input value="" name="card" id="card" class="form-control"   type="text" maxlength="16" >
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-md-6">
                                    <label>
                                    <H2>CVV</H2>
                                    </label>
                                    <input value="" class="form-control"  type="text" maxlength="3" >
                                </div>
                                <div class="col-md-6">
                                        <label>
                                        <H2>Fecha de expiración (MM/AAAA)</H2>
                                        </label>
                                        <div>
                                            <input style="width:50px; display:inline-block" value="" class="form-control"  type="text" maxlength="2" >
                                            <input style="width:50px; display:inline-block" value="" class="form-control"  type="text" maxlength="4" >

                                        </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label><H2><span>Email</span></H2></label>
                                <input class="form-control" type="text" name="email" id="email" maxlength="200" value="">
                            </div>
                            <div class="col-md-4">
                                <label><H2>Monto</H2></label>
                                <input class="form-control" type="number" name="total" id="total" value="">
                            </div>
                        
                        </div>
                        <br>
                        <div class="row">
                                <div class="col-md-12" style="text-align:center;">
                                <button class="btn btn-success btn-lg">
                                    <i class="fa fa-check-square"></i> PAGAR
                                </button>
                                </div>
                            
                        </div>

                    </div>
                </div>
            
                
            </form>
        <center/>
   
    </body>
</html>