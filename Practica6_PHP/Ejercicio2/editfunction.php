<html>
    <head>
        <title>Modificacion de ciudad</title>
    </head>
    <body>
    <?php
        include ("conexion.inc");

        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $habitantes = $_POST['hab'];
        $superficie = $_POST['sup'];
        $metro = $_POST['metro'];

        $vSql = "UPDATE ciudades set paisCiudad='$pais', habitantesCiudad='$habitantes', superficieCiudad='$superficie', metroCiudad = '$metro' 
        WHERE nombreCiudad='$ciudad'";

        mysqli_query($link,$vSql) or die (mysqli_error($link));

        echo("La ciudad fue modificada con exito!<br>");

        echo("<A href= 'menu.html'>Volver al Menu del ABM</A>");
        
        mysqli_close($link);
    ?>
    </body>
</html>