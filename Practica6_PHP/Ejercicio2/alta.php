<?php

    include("conexion.inc");

    if($_SESSION['REQUEST_METHOD'] === 'POST'){

        $ciudad = $_POST['ciudad'];
        $capital = $_POST['capital'];
        $habitantes = $_POST['hab'];
        $superficie = $_POST['sup'];
        $metro = $_POST['metro'];

        if($metro !== 1 && $metro !== 0){
            
            echo 'error ingrese un 1 o un 0';
            
            return;
        }
    }

    $vSql = "INSERT INTO ciudades (nombreCiudad, paisCiudad, habitantesCiudad, superficieCiudad, metroCiudad) 
        VALUES ('$ciudad','$capital', '$habitantes', '$superficie', $metro)";

    mysqli_query($link, $vSql) or die (mysqli_error($link));

    echo("La ciudad fue registrada con exito!<br>");

    echo ("<A href='Menu.html'>VOLVER AL MENU</A>");

    mysqli_free_result($vResultado);
    
    mysqli_close($link);
?>



<html>
    <head>
        <title>Formulario Alta Ciudades</title>
    </head>
    <body>
        <form action="alta.php" method="POST">
            <table width="225">
                <tr>
                    <td> Ciudad:</td>
                    <td> <input type="text" name="ciudad" required>
                </tr>
                <tr>
                    <td> Capital:</td>
                    <td> <input type="text" name="capital" required> </td>
                </tr>
                <tr>
                    <td> Habitantes: </td>
                    <td> <input type="number" name="hab" required></td>
                </tr>
                <tr>
                    <td> Superficie: </td>
                    <td> <input type="number" name="sup"required> </td>
                </tr>
                <tr>
                    <td> Tiene metro?: </td>
                    <td> <input type="number" name="metro" required> </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
                    value="Agregar">
                        <p><a href="Menu.html">Volver al menu del ABM</a></p>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>