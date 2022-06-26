<!--INICIAR SESION -->

<?php require_once 'sesion.php';?>
    <div id="sesion">
      <h1> Bienvenido a Electroshop</h1>
      <aside id="ess"
        <div id="login" class="bloque">
        <link rel="stylesheet" type="text/css" href="estsesion.css"
          
          <h2> Inicio de Sesión </h2>
          <form action="login.php" method="POST">
            <label for="email">Email </label>
            <input type="email" name="usuario"/>

            <label for="password"> Contraseña </label>
            <input type="password" name="password" />

            <input type="submit" value="Ingresar"/>
          </form>
          <h3> ¿No tienes cuenta? </h3>
          <a href="registrarse.php"> Registrate </a>
        </div>

        