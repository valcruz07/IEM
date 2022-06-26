<?php
       include 'header1.php';
       echo $header_html;
       $sql = "SELECT * FROM cliente";
       $result = mysqli_query($db, $sql);

       echo getenv("PHP_PRUEBA_ENV");
        ?>

        <div class="container-fluid p-5 bg-primary text-white text-center">
          <h1>Lista de Clientes</h1>
        </div>

        <?php
         if(isset($_SESSION["alert"]))
          {
            echo '<div class="container mt-5">
              <div class="row">
                <div class="col-sm-2">&nbsp;</div>
                <div class="col-sm-8">
                  <div class="alert alert-success alert-dismissible">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>'
                    .$_SESSION["alert"].'
                </div>
                </div>
            </div>';
            unset($_SESSION["alert"]);
        }

        ?>
        <div class="container mt-5">
          <div class="row">
            <div class="col-sm-2"><a href="portAdmi.php">Volver</a></div>
            <div class="col-sm-8">
              <h3>Clientes</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2">&nbsp;</div>
            <div class="col-sm-8">
              <table class="table">
                <thead>
                  <tr>
                    <td>ID_Cliente</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Correo</td>
                    <td>Celular</td>
                    <td><a href="registrarse.php">Nuevo Cliente</a></td>
                  </tr>
                </thead>
              <tbody>
                <?php
                if($result){
                while($row = mysqli_fetch_array($result)){
                echo '<tr>';
                  echo '<td>';
                    echo $row['id_Cliente'];
                  echo '</td>';
                  echo '<td>';
                    echo $row['CI_Nombre'];
                  echo '</td>';
                  echo '<td>';
                    echo $row['CI_Apellido'];
                  echo '</td>';
                  echo '<td>';
                    echo $row['CI_Correo'];
                  echo '</td>';
                  echo '<td>';
                    echo $row['CI_Celular'];
                  echo '</td>';
                  echo '<td>';
                    echo '<a href="deleteCliente.php?id='.$row['id_Cliente'].'">Eliminar</a>&nbsp;';
                  echo '</td>';
                echo '</tr>';
                }
              }
              mysqli_close($db);
                ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>

        <?php echo $footer_html; ?>