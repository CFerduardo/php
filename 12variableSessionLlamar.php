<?php 
    //se inicia sesion de una archivo donde la session_start() ya este declarada y se puede llamar desde otro archivo 
    session_start();

    if(isset($_SESSION["usuario"])){
        return "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estado"];
    }
    
    echo "No hay datos";
?>