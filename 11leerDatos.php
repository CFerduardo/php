<?php  
    $servidor = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $dbname = "album";
    
    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `fotos`"; //selecciona todos los campos de la tabla fotos
        $sentencia = $conexion->prepare($sql); //prepare() se utiliza para preparar una sentencia SQL para su ejecución. Forma parte de la extensión PDO (Objetos de acceso a datos), que proporciona una interfaz orientada a objetos para interactuar con bases de datos.
        $sentencia->execute();//execute()se utiliza para ejecutar una sentencia preparada previamente. Forma parte de la extensión PDO (Data Access Objects), que proporciona una interfaz orientada a objetos para interactuar con bases de datos.
        $resultado = $sentencia->fetchAll(); //fetchAll() se utiliza para recuperar todas las filas de un conjunto de resultados como una matriz. Es parte de la extensión PDO (Objetos de acceso a datos), que proporciona una interfaz orientada a objetos para interactuar con bases de datos

        foreach($resultado as $foto){
            echo $foto['nombre'].PHP_EOL;
        }
        echo "Conexion Establecida";

    }catch(PDOException $error){
        echo "Conexion Erronea ".$error->getMessage();
    }
?> 
