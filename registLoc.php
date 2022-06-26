<!--Registrarse -->

<?php require_once 'registLoc.php';?>
    <div id="registrarse">
      <h1> Bienvenido a Electroshop</h1>
      <aside id="ess2"
      <div id="register" class="bloque">
      <link rel="stylesheet" type="text/css" href="estregist.css"
          <?php if(isset($_SESSION['errores'])):?>
              <?php var_dump($_SESSION['errores']); ?>
          <?php endif; ?>
          <h3><th>  Registrar Local</th>  </h3>
          <form action="registroLoc.php" method="POST">
            <label for="local">Nombre de Local </label>
            <input type="text" name="local"/>

            <label for="direccion"> Dirección </label>
            <input type="text" name="direccion" />

            <label for="postal"> Código Postal </label>
            <input type="int" name="postal" />

            <input type="submit" name="submit" value="Registrar"/>
          </form>
        </div>
      </div>