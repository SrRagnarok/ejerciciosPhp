<?php

$nombre = $_POST['nombre'];
$estudio = $_POST['estudio'];

if ($estudio == "no") {
    echo "$nombre no tiene estudios";
} elseif($estudio == "primarios") {
    echo "$nombre tiene estudios primarios";
} elseif($estudio == "secundarios"){
    echo "$nombre tiene estudios secundarios";
}

?>