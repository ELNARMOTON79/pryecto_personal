<?php
    //Cerrar sesion
    session_start();

    // Antes de destruir la sesión, asegúrate de que las páginas no se almacenen en caché
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    session_destroy();
    header('Location: index.php');

?>