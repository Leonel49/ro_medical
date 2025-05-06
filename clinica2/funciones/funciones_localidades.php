<?php

try{
    $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
}catch(PDOException $e){
    header('Location: error_504/504.html');
}

function getProvinciaLocalidades(PDO $conexion1)
{
    $consulta = $conexion1->prepare('
    SELECT nombre
    FROM provincias
    INNER JOIN localidades
    ON provincias.id = localidades.provincia_id
    ');
    $consulta->execute();
    $provincias = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $provincias;
}

function getLocalidadesByIdProvincia(PDO $conexion1, $id)
{
    $consulta = $conexion1->prepare('
    SELECT nombre, 
    FROM localidades
    WHERE provincia_id = :id
    ');
    $consulta->execute();
    $localidades = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $localidades;
}

?>