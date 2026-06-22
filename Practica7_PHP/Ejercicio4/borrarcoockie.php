<?php

    if(isset($_COOKIE["noticia"])){

        setcookie("noticia", "", time() - 86400*365);

        header("Location: periodico.php");
        
    }

?>