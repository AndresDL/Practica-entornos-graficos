
<html>
    <head>
        <title>Modificacion</title>
    </head>
    <body>
        <?php
        include ("conexion.inc");

        $ciudad = $_POST['nombre'];

        $vSql = "SELECT * FROM ciudades WHERE nombreCiudad ='$ciudad' ";

        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));

        $fila = mysqli_fetch_array($vResultado);

        ?>
    <form action="editfunction.php" method="POST">
        <table width="356">
            <tr>
                <td width="103"> Nombre: </td>
                <td width="243"> <input type="text" name="nombre" value="<?phpecho($fila['nombreCiudad']); ?>"></td>
            </tr>
            <tr>
                <td width="103"> Capital: </td>
                <td width="243"> <input type="text" name="capital" value="<?php echo($fila['paisCiudad']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Habitantes: </td>
                <td width="243"> <input type="number" name="hab" value="<?php echo($fila['habitantesCiudad']); ?>">
                </td>
            </tr>
            <tr>
                <td width="103"> Superficie: </td>
                <td width="243"> <input type="number" name="sup" value="<?php echo($fila['superficieCiudad']); ?>">
                </td>
            </tr>
             <tr>
                <td width="103"> Superficie: </td>
                <td width="243"> <input type="number" name="metro" value="<?php echo($fila['metroCiudad']); ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input type="submit" name="submit"
                value="modificar">
                </td>
            </tr>
        </table>
    </form>
    <?php

        mysqli_free_result($vResultado);

        mysqli_close($link);
    ?>
    </body>
</html>