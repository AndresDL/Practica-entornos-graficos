
<?php
$destinatario = "andres2000adl@gmail.com ";
$asunto = "Correo con formato HTML";
$cuerpo = '
<html>
    <head>
        <title>Envio de mail HTML</title>
    </head>
    <body>
        <h1>Hola!</h1>
        <p>
        <strong>Este es un mail con formato HTML!</strong>
        Subilo a visual studio code para ver como queda!
        </p>
    </body>
</html>
';

$headers = "MIME-Version:1.0\r\n";

$headers .= "Content-type:text/html; charset=iso-8859-1\r\n";

$headers .= "From: andres2000adl@gmail.com\r\n";

mail($destinatario,$asunto,$cuerpo,$headers)
?>