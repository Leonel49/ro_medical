<?php

try{
    $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
}catch(PDOException $e){
    header('Location: error_504/504.html');
}

function addPaciente(PDO $conexion, $data)
{
    $consulta = $conexion->prepare('
        INSERT INTO pacientes (nombre, edad, direccion, telefono, foto)
        VALUES (:nombre, :edad, :direccion, :telefono, :foto)
    ');
    $consulta->bindValue(':nombre', $data['nombre']);
    $consulta->bindValue(':edad', $data['edad']);
    $consulta->bindValue(':direccion', $data['direccion']);
    $consulta->bindValue(':telefono', $data['telefono']);
    $consulta->bindValue(':foto', $data['foto']);
    $consulta->execute();
    
}

function getPacientes(PDO $conexion1)
{
    $consulta = $conexion1->prepare('
    SELECT *
    FROM pacientes pac
    ');
    $consulta->execute();
    $pacientes = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $pacientes;
}

?>
