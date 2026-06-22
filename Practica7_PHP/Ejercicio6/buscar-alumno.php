Pagina2.php
<?php
    session_start();
?>

<html>
    <head>
    <title>Buscar alumno por mial</title>
    </head>
    <body>
        <?php
        include ("conexion.inc");

        $mail= $_POST['mail'];

        $vSql = "SELECT * FROM alumnos WHERE mail ='$mail' ";

        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));

        $fila = mysqli_fetch_array($vResultado);

        if(mysqli_num_rows($vResultado) === 0) {

            echo ("Usuario Inexistente!");

        }else{

            $_SESSION['usuario']= $fila['Nombre'];

        }
        ?>
        <a href="mostrar-alumno.php">Ingresar a pagina principal</a>;
    </body>
</html>