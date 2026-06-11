<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <title>Formulario de contacto</title>
    </head>
    <body>
        <form action="enviar.php" method="post" >
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
        
        <div class="container">
            <label> Recomendale el sitio a un amigo:  
                
                <button type="button" class="btn btn-primary btn-lg">
                    <a href="Ejercicio3.php" style=" text-decoration: none; color: black;">Recomendar</a></button>

            </label>
        </div>
    </body>
</html>