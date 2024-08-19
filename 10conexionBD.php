<?php 
    $servidor = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $dbname = "album";
    
    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la programacion', 'foto.jpg');";
        $conexion->exec($sql);

        echo "Conexion Establecida";

    }catch(PDOException $error){
        echo "Conexion Erronea ".$error->getMessage();
    }
?> 