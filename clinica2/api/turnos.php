<?php
require_once('../conf/conf.php');
require_once('../funciones/funciones_input.php');
require_once('../funciones/funciones_turnos.php');

$paciente_id = test_input($_POST['paciente_id'] ?? null);
$fecha = test_input($_POST['fecha'] ?? null);
$hora = test_input($_POST['hora'] ?? null);

$errores = array();

if (isset($_POST['submit'])) {

    if (empty($paciente_id)) {
        array_push($errores, 'Debe seleccionar un paciente.');
    }

    if (empty($fecha)) {
        array_push($errores, 'Debe ingresar una fecha para el turno.');
    }

    if (empty($hora)) {
        array_push($errores, 'Debe ingresar una hora para el turno.');
    }

    if (count($errores) == 0) {
        addTurno($conexion, array(
            'paciente_id' => $paciente_id,
            'fecha' => $fecha,
            'hora' => $hora
        ));

        header('Location: lista_turnos.php');
        exit;
    }
}
?>

