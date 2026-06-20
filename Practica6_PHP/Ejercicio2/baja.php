<?php

    include ("conexion.inc");

    if($_SESSION['REQUEST_METHOD'] === 'POST'){

        $ciudad = $_POST ['nombre'];

        $vSql= "DELETE FROM ciudades WHERE nombreCiudad = '$ciudad' ";

        mysqli_query($link, $vSql);

        echo("La ciudad fue eliminada<br>");

        echo("<A href='menu.html'>Volver al Menu del ABM</A>");
        
        mysqli_free_result($vResultado);

        mysqli_close($link);
    }
?>

<html>
    <head>
        <title>Ciudad a dar de baja</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body bgcolor="#FFFFFF" text="#000000">
        <form action="baja.php" method="POST">
            <table>
                <tr>
                    <td> Ciudad a dar de Baja : </td>
                    <td>
                    <input type="text" name="nombre">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                    <input type="submit" name="submit" value="borrar">
                    <p><a href="menu.html">Volver al menu del ABM</a></p>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>