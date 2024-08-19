<?php
    try {
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "album";

        // Connect to the database using PDO
        $connection = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the INSERT statement
        $sql = "INSERT INTO fotos (nombre, ruta) VALUES (:nombre, :ruta)";
        $stmt = $connection->prepare($sql);

        // Bind the parameters to the prepared statement
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':ruta', $ruta);

        // Set the parameter values
        $nombre = "jugando con la programacion";
        $ruta = "foto.jpg";

        // Execute the prepared statement
        $stmt->execute();

        echo "Conexión establecida y registro insertado exitosamente.";
    }catch (PDOException $error){
        echo "Error: " . $error->getMessage();
    }
?>