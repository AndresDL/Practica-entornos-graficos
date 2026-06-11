<html>
    <head>
        <!--Se accede mediante boton en ejercicio2.php -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Formulario de recomendación a amigo</title>

    </head>
    <body>
        <form action="enviaramigo.php" method="post" >
            <fieldset>
                <p><label>Email de tu amigo<input type="mail" name="email"
                size="25" /> </label></p>
                Comentario
                <p><label><textarea name="texto" cols="32"
                rows="6"></textarea></label></p>
                <input type="submit" value="Enviar"/>
            </fieldset>
        </form>
    </body>
</html>