<?php
session_start();
?>
<html>
    <body>
    <a href="cuenta.php"></a>
    <?php
    echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
    ?>
    <br>
    <a href="cuenta.php">Otra página</a>
    </body>
</html>