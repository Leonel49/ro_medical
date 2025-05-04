<?php
try{
    $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
}catch(PDOException $e){
    header('Location: error_504/504.html');
}

function addTurno(PDO $conexion, $data)
{
    $consulta = $conexion->prepare('
        INSERT INTO turnos (paciente_id, fecha, hora)
        VALUES (:paciente_id, :fecha, :hora)
    ');
    
    $consulta->bindValue(':paciente_id', $data['paciente_id']);
    $consulta->bindValue(':fecha', $data['fecha']);
    $consulta->bindValue(':hora', $data['hora']);
    
    $consulta->execute();
}

function addPaciente(PDO $conexion, $data)
{
    $consulta = $conexion->prepare('
        INSERT INTO pacientes(nombre, apellido, edad, direccion, telefono, imagen)
        VALUES(:nombre, :apellido, :edad, :direccion, :telefono, :imagen)
    ');
    $consulta->bindValue(':nombre', $data['nombre']);
    $consulta->bindValue(':apellido', $data['apellido']);
    $consulta->bindValue(':edad', $data['edad']);
    $consulta->bindValue(':direccion', $data['direccion']);
    $consulta->bindValue(':telefono', $data['telefono']);
    $consulta->bindValue(':imagen', $data['imagen']);
    $consulta->execute();
}


?>