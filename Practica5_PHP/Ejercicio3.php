<?php 

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $destinatario = "".$_POST['email2']."";

        $url = "https://www.awesome.com";

        $asunto = "Recomendación de sitio";

        $cuerpo = "Hola! Soy ".$_POST['nombre'].", mi email es ".$_POST['email']." 
            y esto es una recomendación para que visites '$url'";
        
        $headers = "MIME-Version:1.0\r\n";

        $headers .= "Content-type:text/html; charset=iso-8859-1\r\n";    

        $headers .= "From: ".$_POST['email1']."\r\n";

        mail($destinatario,$asunto,$cuerpo,$headers);

    }

?>

<html>
    <head>
        <title>Formulario de contacto con webmaster</title>
    </head>
    <body>
        <form action="Ejercico2.php" method="post">
            <fieldset>
                <p><label> Nombre <input type="text" name="nombre"
                size="25" /> </label></p>
                <p><label> Email <input type="text" name="email1"
                size="25" /> </label></p>
                <p><label> Email de tu amigo<input type="text" name="email2">
                <input type="submit" value="Enviar"/>
            </fieldset>
        </form>
    </body>
</html>