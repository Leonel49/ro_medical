<?php

try{
    $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
}catch(PDOException $e){
    header('Location: error_504/504.html');
}

function getProvincias(PDO $conexion1)
{
    $consulta = $conexion1->prepare('
    SELECT nombre
    FROM provincias
    ');
    $consulta->execute();
    $provincias = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $provincias;
}

?>