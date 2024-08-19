<?php 
//session_start()se utiliza para iniciar una sesión PHP o continuar una existente. Es parte de la biblioteca de manejo de sesiones que le permite almacenar y administrar información específica del usuario en varias páginas web.
    session_start();

    $_SESSION["usuario"] = "carlos";        //variable tipo session
    $_SESSION["estado"] = "logueado";

    echo "session iniciada".PHP_EOL;
    echo '<br/>';

    echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estado"];

?>