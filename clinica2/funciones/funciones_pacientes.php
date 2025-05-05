<?php

try{
    $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
}catch(PDOException $e){
    header('Location: error_504/504.html');
}

function addPaciente(PDO $conexion, $data)
{
    $consulta = $conexion->prepare('
        INSERT INTO pacientes (nombre, apellido, dni, direccion, email, estado, fecha_alta)
        VALUES (:nombre, :apellido, :dni, :direccion, :email, :estado, :fecha_alta)
    ');
    $consulta->bindValue(':nombre', $data['nombre']);
    $consulta->bindValue(':apellido', $data['apellido']);
    $consulta->bindValue(':dni', $data['dni']);
    $consulta->bindValue(':direccion', $data['direccion']);
    $consulta->bindValue(':email', $data['email']);
    $consulta->bindValue(':estado', $data['estado']);
    $consulta->bindValue(':fecha_alta', $data['fecha_alta']);
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
