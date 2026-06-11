

<html>
    <head><title>Envio de corre simple</title></head>
    <body>
        <?php
            $destinatario = "andres2000adl@gmail.com";
            $asunto = "Test de mail()";
            $cuerpo = "Mail de verificación";
            mail($destinatario,$asunto,$cuerpo);
        ?>
    </body>
</html>