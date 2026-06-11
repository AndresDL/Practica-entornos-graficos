<?php
    $destino = $_POST[email];
    $asunto = "Feedback de pagina";
    $comentario = "
        \n
        Nombre: $_POST[nombre]\n
        Email: $_POST[email]\n
        Comentario: $_POST[texto]\n
        \n";
    mail( $destino, $asunto, $comentario);
?>