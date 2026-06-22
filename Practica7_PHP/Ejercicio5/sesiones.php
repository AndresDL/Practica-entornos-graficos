<?php

    session_start();

    if(isset($_POST)){

        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["clave"] = $_POST["clave"];
        
        header("Location: mostrar.php");
    }
?>