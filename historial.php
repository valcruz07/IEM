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
    <link rel="stylesheet" type="text/css" href="estilos.css"
  </head>
  <body style="background-color:#08E7EE;">

<?php require_once 'historial.php';?>
      <!--Cabecera -->
      <header id="cabecera">
        <div id="logo">
          <a href="historial.php">
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
              <a href="portada2.php?idusu=<?php echo $idusu; ?>"> <?php $name = $row['CI_Nombre']; echo $name; ?> </a>

            </li>
          </ul>
        </nav>
        <div id= "buscador" class="bloque" >
          <h3> </h3>
          <center>
          <form action= "buscador.php" method="POST">
            <input type= "text" name= "busqueda" />
            <input type= "submit" value= "Buscar" />
          </form>
          </center>

<!-- TABLA CON LAS COMPRAS PASADAS -->
<?php
require('db.php');

/* Variable para el control de errores*/
$arrMensaje=array();

/* OBJETO CONEXIÓN */
//Ya lo obtienes en el require, me parece...
$mysqli = new mysqli("localhost","root","","electroshop");

/*
        * Escribiremos un código controlado, que vaya evaluando las variables
        * Nunca podemos dar por hecho que las cosas funcionarán porque sí
*/

/*
        *1ª evaluación: ¿la conexión está activa?
        *Este sería el primer paso antes de lanzar cualquier código
        *relativo a la base de datos
*/

if ($conexion){


    /*
            *CONSULTA PARA PREPARAR
            *En estas consultas en vez de los valores pone el signo ?
            *Habrá tantos signos ?  como valores externos se requieran
            *Aquí sólo se usa uno, pero pueden ser más
    */
    $sql = "SELECT *  FROM carrito WHERE id_Carrito = ? ORDER BY Carrito_FechaCreacion DESC";

    /*
            *VALORES
            *Generalmente los valores son recuperados por $_POST o $_GET
            *Aquí lo ponemos directamente por motivos de simplicidad
            *Un valor recuperado por POST sería algo así más o menos: $id=$_POST["id"];
            *La consulta buscará los actores cuyo id sea mayor que 0 y menor que 8
    */

    $idusuario = $_SESSION['id_Carrito'];

    /*
            *PREPARAR LA CONSULTA
    */

    $stmt=$mysqli->prepare($sql);

    /*
            *2ª evaluación: ¿La consulta se preparó bien?
            *Dado que el método prepare invocado antes devuelve FALSE
            *si hay algún error, podemos preguntar si $stmt es TRUE
            *Si no lo es, significa que hubo un error en la consulta
    */

    if ($stmt) {

        /*
              * Si la consulta se preparó bien, ahora le pasamos aparte los valores
              * Este es el núcleo de las consultas preparadas
              * Se usa aquí bind_param para pasar los valores
              * IMPORTANTE: Aquí se pasan tantos valores como signos de ? haya en la instrucción $sql
              * como la instrucción tenía un sólo ?, pasamos un solo valor
              * cuando hay más valores, estos deben pasarse en el orden en que aparecen en $sql
              * Las "ii"  indican el tipo de dato de esa columna en la base de datos
              * en este caso son numéricos, si fuesen cadenas, en vez de "i" habría "s"
              * si fuese uno numérico y otro cadena entonces tendríamos "is", y así por el estilo...
        */

        $stmt->bind_param("i", $idusuario); //Si idusuario es VARCHAR cambia la "i" por una "s"
        $stmt->execute();

        /*
                * ALMACENAR LOS RESULTADOS
                * mysqli tiene un problema cuando se trata de almacenar los resultados
                * en arrays asociativos usando consultas preparadas
                * por eso es invocado aquí el método get_result hecho a mano
                * ya que éste sólo funciona en servidores con mysqlnd instalado
                * el método get_result puede ser guardado en una clase utilitaria
                * y llamarlo mediante una nueva instancia de esa clase cuando lo necesitemos
                * o, si hacemos muchas operaciones de este tipo, recomiendo pasar de mysqli a PDO
        */

        $arrResultado=get_result($stmt);


/*
        *3ª evaluación: ¿Se cumplen los criterios de búsqueda?
*/        
    if($arrResultado){


        /*
                * CONSTRUIR LA TABLA
                * En vez de mezlcar constantemente código HTML/PHP
                * Lo cual hace el código más difícil de leer y analizar
                * Podemos crear toda nuestra tabla en una variable PHP que iremos concatenando
                * Y la imprimimos al final
        */

        
        /* Primera parte de nuestra tabla */
        $strHTML='<table>
                        <thead>
                            <th >ID Carrito</th>
                            <th >Monto pagado</th>
                            <th >Fecha</th>
                         </thead>
                         <tbody>';

        /* Leemos el array obtenido antes y seguimos concatenando cada fila/columnas */


        foreach ($arrResultado as $row)
        {
            $strHTML.='<tr>';
            $strHTML.='<td>'.$row["id_Carrito"]."</td>";
            $strHTML.='<td>'.$row["Carrito_MontoTotal"]."</td>";
            $strHTML.='<td>'.$row["Carrito_FechaCreacion"]."</td>";
            $strHTML.='</tr>';

        }

        /* Una vez fuera del bucle, completamos la tabla */

        $strHTML.='</tbody>';
        $strHTML.='</table>';

        /*Completada la tabla, la imprimimos*/

        echo $strHTML;
    
    }else{
    
       $arrMensaje=array("error"=>"No hay datos que cumplan los criterios");

    }


        /* Cerramos el $stmt */

        $stmt->close();

    }else{

        /*
            * Llenamos el array de control de errores con un mensaje
            * Podemos usar el método error de $mysqli para saber qué error es
        */

        $arrMensaje=array("error"=>"Hubo un fallo en la consulta: ".$mysqli->error);

    }
    
    
    /* Cerramos la conexión */
    
    $mysqli->close();


}else{

        /*
            * Llenamos el array de control de errores con un mensaje
            * Podemos usar el método error de $mysqli para saber qué error es
        */

    $arrMensaje=array("error"=>"La conexión es nula: ".$mysqli->error);
}


/* 
    * VERIFICAR SI HUBO ERROR
    * Aquí leemos $arrMensaje para ver si contiene algo
    * Si hay algo significa que algún error fue capturado en la ejecución del código
    * entonces podremos imprimirlo
    * Esta forma de proceder la he copiado de los servicos REST, que siempre devuelven algo
    * es una buena práctica hacer decir siempre algo al código
    * o sea, no escribir código mudo cuando falle algo
*/
if ($arrMensaje){
    echo $arrMensaje["error"];
}


/*
    * FUNCION QUE EMULA EL FETCH_ASSOC DE PDO
    * Esta función nos permite crear un array asociativo con los resultados
    * Así accedemos fácimente a su valor por el nombre de columna en la base de datos
*/

function get_result( $Statement ) {
    $RESULT = array();
    $Statement->store_result();
    for ( $i = 0; $i < $Statement->num_rows; $i++ ) {
        $Metadata = $Statement->result_metadata();
        $PARAMS = array();
        while ( $Field = $Metadata->fetch_field() ) {
            $PARAMS[] = &$RESULT[ $i ][ $Field->name ];
        }
        call_user_func_array( array( $Statement, 'bind_result' ), $PARAMS );
        $Statement->fetch();
    }
    return $RESULT;
}
?>