<?php  
    $txtNombre = "";
    if($_POST){
        $txtNombre = (isset($_POST["txtNombre"])?$_POST["txtNombre"]:"");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!--coidgo embebido-->
    <?php if($_POST){?> <!--apertura-->
        Hola <?=$txtNombre?>
    <?php } ?> <!--cierre-->
    <form action="14inputTex.php" method="post">
        <input value ="<?=$txtNombre?>" type="text" name="txtNombre">
        <input type="submit" value="Enviar Informacion">
    </form>
</body>
</html>