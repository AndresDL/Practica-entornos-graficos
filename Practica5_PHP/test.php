<html>
    <head><title>Archivo para testear scripts</title></head>
    <body>
        <?php
            $to = "andres2000adl@gmail.com";
            $subject = "Test de mail()";
            $message = "Mail de verificación";
            mail($to,$subject,$message);
        ?>

    </body>
</html>