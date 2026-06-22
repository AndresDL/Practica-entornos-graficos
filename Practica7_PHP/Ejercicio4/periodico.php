<?php 

    if (isset($_POST["noticia"])){

        $_COOKIE["visitado"] = true;
        $noticia = $_POST["noticia"];
        setcookie("noticia", $noticia, time() + 86400*365);
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Pagina de noticias</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body> 
        <?php if(!isset($_COOKIE["noticia"])): ?>
            <h4>Seleccione el tipo de noticia que desea leer</h4>
        <?php else: ?>
            <h4>Bienvenido devuelta! Aqui tiene noticias de su elección</h4>
        <?php endif; ?>
        <form action = "periodico.php" method="POST">


            <?php if(isset($_COOKIE["visitado"]) && isset($_COOKIE["noticia"]) && $_COOKIE["noticia"] === "deportiva"): ?>
                <input type="radio" class="btn-check" name="noticia" value="deportiva" id="success-outlined" autocomplete="off">
                <label class="btn btn-outline-success" for="success-outlined">Noticia deportiva</label>
            <?php elseif(isset($_COOKIE["visitado"]) && isset($_COOKIE["noticia"]) && $_COOKIE["noticia"] === "politica"): ?>
                <input type="radio" class="btn-check" name="noticia" value="politica" id="danger-outlined" autocomplete="off">
                <label class="btn btn-outline-danger" for="danger-outlined">Noticia politica</label>
            <?php elseif(isset($_COOKIE["visitado"]) && isset($_COOKIE["noticia"]) && $_COOKIE["noticia"] === "economica"): ?>
                <input type="radio" class="btn-check" name="noticia" value="economica" id="warning-outlined" autocomplete="off">
                <label class="btn btn-outline-warning" for="warning-outlined">Noticia economica</label>
            <?php else: ?>
                <input type="radio" class="btn-check" name="noticia" value="deportiva" id="success-outlined" autocomplete="off">
                <label class="btn btn-outline-success" for="success-outlined">Noticia deportiva</label>

                <input type="radio" class="btn-check" name="noticia" value="politica" id="danger-outlined" autocomplete="off">
                <label class="btn btn-outline-danger" for="danger-outlined">Noticia politica</label>

                <input type="radio" class="btn-check" name="noticia" value="economica" id="warning-outlined" autocomplete="off">
                <label class="btn btn-outline-warning" for="warning-outlined">Noticia economica</label>
            <?php endif; ?>
            <?php if(!isset($_COOKIE["noticia"])): ?>
                <input type="submit" class="btn btn-outline-primary" value="Seleccionar noticia">
            <?php endif; ?>
        </form>
        <br>
        <button><a href="borrarcoockie.php">Borrar elección</a></button>
    </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>

