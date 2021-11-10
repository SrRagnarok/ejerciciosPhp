<?php

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    echo "Datos ingresados: $nombre, $edad <br>";
    if ($edad >= 18){
        echo "$nombre es mayor de edad";
    } elseif($edad < 18 && $edad > 0) {
        echo "$nombre es menor de edad";
    }elseif($edad <= 0){
        echo "Edad no válida <br>";
    }

?>