
<html>
    <head>
        <title> Listados completo con PAGINACIÓN </title>
    </head>
    <body>
        <?php
        
            include("conexion.inc");

            $Cant_por_Pag = 2;

            $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;

            if (!$pagina) {
                $inicio = 0;
                $pagina=1;
            }

            else {
                $inicio = ($pagina - 1) * $Cant_por_Pag;
            }

            $vSql = "SELECT * FROM ciudades";

            $vResultado = mysqli_query($link, $vSql);

            $total_registros=mysqli_num_rows($vResultado);

            $total_paginas = ceil($total_registros/ $Cant_por_Pag);

            echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";

            $vSql = "SELECT * FROM ciudades LIMIT " . $inicio . "," . $Cant_por_Pag;

            $vResultado = mysqli_query($link, $vSql);

            $total_registros=mysqli_num_rows($vResultado);

        ?>
        <table border=1>
            <tr>
                <td><b>id</b></td>
                <td><b>ciudad</b></td>
                <td><b>pais</b></td>
                <td><b>habitantes</b></td>
                <td><b>superficie</b></td>
                <td><b>metro</b></td>
            </tr>
            <?php
                while ($fila = mysqli_fetch_array($vResultado))
                {
            ?>
            <tr>
                <td><?php echo ($fila['codigoCiudad']); ?></td>
                <td><?php echo ($fila['nombreCiudad']); ?></td>
                <td><?php echo ($fila['paisCiudad']); ?></td>
                <td><?php echo ($fila['habitantesCiudad']); ?></td>
                <td><?php echo ($fila['superficieCiudad']); ?></td>
                <td><?php echo ($fila['metroCiudad']); ?></td>
            </tr>
            <tr>
                <td colspan="8">
                <?php
                }

                mysqli_free_result($vResultado);

                mysqli_close($link);
                ?>
                </td>
            </tr>
        </table>
        <?php
            if ($total_paginas > 1){

                for ($i=1;$i<=$total_paginas;$i++){

                    if ($pagina == $i){echo $pagina . " ";}
                    
                    else{echo "<a href='Listado_pag.php?pagina=" . $i ."'>" . $i . "</a> ";}
                }
            }
        ?>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p align="center"><a href="menu.html">Volver al menu del ABM</a></p>
    </body>
</html>