<?php
    if (!isset($_COOKIE['visitas']))
    {
        $visitas = 1;
        setcookie("visitas", $visitas , time()+ 86400*365);
    }
    else
    {
        $visitas = $_COOKIE['visitas'] + 1;
        setcookie("visitas", $visitas , time()+ 86400*365);
    }
?>
<html>
    <head>
        <title>Contador de visitas</title>
    </head>
    <body>
    <?php

        if ($visitas >= 1){
            echo "Esta es tu visita número " .$_COOKIE['visitas'];
        } else {
            echo "Bienvenido, esta es la primera vez que visitás esta página";
            echo $visitas;
        }
    ?>
    </body>
</html>