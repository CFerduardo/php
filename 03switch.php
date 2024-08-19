<?php 
    if($_POST){
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
        $btn = $_POST['btn'];

        switch($btn){
            case 'Sumar':
                echo "La suma es ".($valorA + $valorB);
                break;
            case 'Restar':
                echo "La resta es ".($valorA - $valorB);
                break;
            case 'Multiplicar':
                echo "La suma multiplicacion ".($valorA * $valorB);
                break;
            case 'Dividir':
                echo "La division es ".($valorA / $valorB);
                break;
            default:
                echo "no hizo nada";
                break;
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular</title>
</head>
<body>
    <form action="03switch.php" method="post">
        Valor A:
        <input type="txt" name="valorA" id="">
        <br/>

        Valor B:
        <input type="txt" name="valorB" id="">
        <br/>

        <input type="submit" name="btn" value="Sumar">
        <input type="submit" name="btn" value="Restar">
        <input type="submit" name="btn" value="Multiplicar">
        <input type="submit" name="btn" value="Dividir">
    </form>
</body>
</html>