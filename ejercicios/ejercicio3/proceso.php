<?php

$nombre = $_POST['nombre'];
$deportes = $_POST['deporte'];

echo "Los deportes que practica $nombre son: <br>";
if(!empty($deportes)){
    foreach($deportes as $selected){
        echo $selected."<br>";
        }
}

?>