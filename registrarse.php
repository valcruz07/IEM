<!--Registrarse -->

<?php require_once 'registrarse.php';?>
    <div id="registrarse">
      <h1> Bienvenido a Electroshop</h1>
      <aside id="ess2"
      <div id="register" class="bloque">
      <link rel="stylesheet" type="text/css" href="estregist.css"
          <?php if(isset($_SESSION['errores'])):?>
              <?php var_dump($_SESSION['errores']); ?>
          <?php endif; ?>
          <h3><th>  Registrarse</th>  </h3>
          <form action="registro.php" method="POST">
            <label for="nombre">Nombre </label>
            <input type="text" name="nombre"/>

            <label for="Apellido"> Apellido </label>
            <input type="text" name="Apellido" />

            <label for="celular"> Celular </label>
            <input type="int" name="celular" />

            <label for="email">Email </label>
            <input type="email" name="email"/>

            <label for="password"> Contraseña </label>
            <input type="password" name="password" />

            <input type="submit" name="submit" value="Registrar"/>
          </form>
        </div>
      </div>