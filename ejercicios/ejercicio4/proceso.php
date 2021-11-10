<?php

$nombre = $_POST['nombre'];
$ingresos = $_POST['ingresos'];

if($ingresos == 3){
    echo "El usuario $nombre debe pagar impuestos";
}else{
    echo "El usuario $nombre no debe pagar impuestos";
}

?>