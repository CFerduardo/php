<?php 
    //print_r para imprimir array
    $fruta = array('uvas', 'peras', 'mango');
    print_r($fruta);
    echo $fruta[0].PHP_EOL;
    for($i = 0; $i<3; $i++){
        echo $fruta[$i].PHP_EOL;
    }

    //arreglos asociativos
    //designar el indice que quieras
    $nombres = ['c'=>'carlos', 'm'=>'mariolga', 'd'=>'daniel'];
    print_r($nombres);
    echo $nombres['m'].PHP_EOL;

    foreach($nombres as $a=>$valor){
        echo "$a => $valor ".PHP_EOL;
    }

    //function arrays
    $colores = ['rojo', 'azul', 'verde'];
    array_push($colores, 'amarillo');
    print_r($colores);
?>