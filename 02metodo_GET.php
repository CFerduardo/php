<?php 

//$_GET es una variable superglobal en PHP que se utiliza para recopilar datos enviados a un servidor a través de un formulario HTML utilizando el método GET. A diferencia de $_POST, que se utiliza para los datos del formulario enviados a través de una solicitud POST, $_GET se utiliza para los datos enviados a través de la propia URL. Esto significa que los datos se añaden a la URL y se envían junto con la solicitud. Luego, PHP pone estos datos a disposición del script que procesa la solicitud utilizando la variable superglobal $_GET.

    if($_GET){
        $nombre = $_GET['nombre'];
        echo "Saludar a $nombre";   
}
?>

