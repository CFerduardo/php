<?php 
    session_start();
    session_destroy();      //destruir sesion

    echo "se destruyó la sesion de usuario";

?>