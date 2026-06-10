<html>
    <head><title>Script para funcion</title></head>
    <body>
        <?php 
            include("funcion.php");
            $username= "%$&#@";
            echo $rta = comprobar_nombre_usuario($username);
        ?>
    </body>
</html>