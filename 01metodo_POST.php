<?php 
    // $_POST es una variable superglobal en PHP que se utiliza para recopilar datos enviados a un servidor a través de un formulario HTML mediante el método POST. Cuando un usuario envía un formulario, los datos introducidos en los campos del formulario se envían al servidor junto con la solicitud. Luego, PHP pone estos datos a disposición del script que procesa el formulario mediante la variable superglobal $_POST.
    if($_POST){
        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
        echo "Saludar a $nombre $apellido";   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form action="01metodo_POST.php" method="post">
        Nombre:
        <input type="txt" name="txtNombre" id="">
        <br/>

        Apellido:
        <input type="txt" name="txtApellido" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>