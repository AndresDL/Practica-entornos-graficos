<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Ultimo usuario ingresado</title>
    </head>
    <body>
        <?php if(isset($_SESSION["usuario"])): ?>
            <p>Usuario: <?php echo $_SESSION["usuario"]; ?></p>
            <p>Clave: <?php echo $_SESSION["clave"]; ?></p>
        <?php endif; ?>
    </body>
</html>