<?php

    if(isset($_POST["usuario"])){

        $usuario = $_POST["usuario"];

        setcookie("usuario", $usuario, time() + 86400*365);

        echo "El ultimo usuario ingresado es: " . $usuario;
        
    }

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Ultimo usuario ingresado</title>
    </head>
    <body>
    <p>
        <form action="formulario-usuario.php" method="post">
            <br>
            Ingrese un usuario:<label><input type="text" name="usuario"></label>
            <input type="submit" value="Settear el usuario">
        </form>
    </body>
</html>