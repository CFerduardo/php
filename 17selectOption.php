<?php  
    $txtNombre = "";
    $rdg = "";
    $chkphp = "";
    $chkhtml = "";
    $chkcss = "";
    $lsAnime = "";

    if($_POST){
        $txtNombre = (isset($_POST["txtNombre"])?$_POST["txtNombre"]:"");
        $rdg = (isset($_POST["lenguaje"])?$_POST["lenguaje"]:"");

        $chkphp = (isset($_POST["chkphp"])=="si")?"checked":"";
        $chkhtml = (isset($_POST["chkhtml"])=="si")?"checked":"";
        $chkcss = (isset($_POST["chkcss"])=="si")?"checked":"";

        $lsAnime = (isset($_POST["lsAnime"]))?$_POST["lsAnime"]:"";
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
        <br/>
        <strong>Estas Aprendiendo: <br/>
        - <?=$chkphp=="checked"?"PHP":"" ?> <br/>
        - <?=$chkhtml=="checked"?"HTML":"" ?> <br/>
        - <?=$chkcss=="checked"?"CSS":"" ?> <br/>
        </strong>
        <br/>
        <strong>Tu Anime favorito es:
            <?=$lsAnime?>
        </strong>
        <br/>
    <?php } ?> <!--cierre-->

    <form action="17selectOption.php" method="post">
        Nombre:<br/>
        <input value ="<?=$txtNombre?>" type="text" name="txtNombre">
        <br/>
        Te Gusta?:<br/>
        <br/>PHP:<input type="radio" <?= $rdg=="php"?"checked":"" ?> name="lenguaje" value = "php" id=""><br>
        <br/>HTML:<input type="radio" <?= $rdg=="html"?"checked":"" ?> name="lenguaje" value = "html" id=""><br>
        <br/>CSS:<input type="radio" <?= $rdg=="css"?"checked":"" ?> name="lenguaje" value = "css" id=""><br>

        Estás Aprendiendo... <br/>
        <br/> php:<input type="checkbox" <?=$chkphp?> name="chkphp" value="si" id=""><br/>
        <br/> html:<input type="checkbox" <?=$chkhtml?> name="chkhtml" value="si" id=""><br/>
        <br/> css:<input type="checkbox" <?=$chkcss?> name="chkcss" value="si" id=""><br/>
        <br/>

        Que anime te gusta?... <br/>
        <select name="lsAnime" id="">
            <option value="">[Ninguna Serie]</option>
            <option value="Naruto" <?= $lsAnime=="Naruto"?"selected":"" ?>>Naruto</option>
            <option value="Pokemon" <?= $lsAnime=="Pokemon"?"selected":"" ?>>Pokemon</option>
            <option value="Yu-Gi-Oh!" <?= $lsAnime=="Yu-Gi-Oh!"?"selected":"" ?>>Yu-Gi-Oh!</option>
        </select>
        <br/>
        <br/>

        <input type="submit" value="Enviar Informacion">
    </form>
</body>
</html>