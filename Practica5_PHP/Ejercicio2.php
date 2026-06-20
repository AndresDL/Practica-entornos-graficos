<?php 

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $destinatario = "AdminDePagina@gmail.com";

        $asunto = "Contacto sobre consultas";

        $cuerpo = "Hola! Soy ".$_POST['nombre'].", mi email es ".$_POST['email']." 
            y mi consulta es: ".$_POST['texto']."";
        
        $headers = "MIME-Version:1.0\r\n";

        $headers .= "Content-type:text/html; charset=iso-8859-1\r\n";    

        $headers .= "From: ".$_POST['email']."\r\n";

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
                <p><label> Email <input type="text" name="email"
                size="25" /> </label></p>
                Comentario
                <p><label><textarea name="texto" cols="32"
                rows="6"></textarea></label></p>
                <input type="submit" value="Enviar"/>
            </fieldset>
        </form>
    </body>
</html>