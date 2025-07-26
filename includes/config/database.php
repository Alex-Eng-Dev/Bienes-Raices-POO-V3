<?php

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', 'alexis1234567890', 'bienesraices_crud');
    if(!$db){
        echo "Conexión exitosa a la base de datos";
        exit;
    }
    return $db;
}