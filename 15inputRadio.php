<?php  
    $txtNombre = "";
    $rdg = "";
    if($_POST){
        $txtNombre = (isset($_POST["txtNombre"])?$_POST["txtNombre"]:"");
        $rdg = (isset($_POST["lenguaje"])?$_POST["lenguaje"]:"");
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
        <strong>Hola <?=$txtNombre?></strong>
        <br/>
        <strong>Tu lenguaje favorito es: <?=$rdg?></strong>
    <?php } ?> <!--cierre-->

    <form action="15inputRadio.php" method="post">
        Nombre:<br/>
        <input value ="<?=$txtNombre?>" type="text" name="txtNombre">
        <br/>
        Te Gusta?:<br/>
        <br/>PHP:<input type="radio" <?= $rdg=="php"?"checked":"" ?> name="lenguaje" value = "php" id=""><br>
        <br/>HTML:<input type="radio" <?= $rdg=="html"?"checked":"" ?> name="lenguaje" value = "html" id=""><br>
        <br/>CSS:<input type="radio" <?= $rdg=="css"?"checked":"" ?> name="lenguaje" value = "css" id=""><br>

        <input type="submit" value="Enviar Informacion">
    </form>

</body>
</html>