<?php
require_once('../conf/conf.php');
require_once('../funciones/funciones_input.php');
require_once('../funciones/funciones_pacientes.php');

$nombre = test_input($_POST['nombre'] ?? '');
$apellido = test_input($_POST['apellido'] ?? '');
$dni = test_input($_POST['dni'] ?? '');
$direccion = test_input($_POST['direccion'] ?? '');
$email = test_input($_POST['email'] ?? '');
$estado = test_input($_POST['estado'] ?? '');
$fecha_alta = date('Y-m-d'); // O puede venir desde el formulario

$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($nombre)) $errores[] = 'Usted debe ingresar un nombre.';
    if (empty($apellido)) $errores[] = 'Usted debe ingresar un apellido.';
    if (!preg_match('/^[0-9]{7,8}$/', $dni)) $errores[] = 'Debe ingresar un DNI válido.';
    if (empty($direccion)) $errores[] = 'Usted debe ingresar una dirección.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = 'Correo electrónico inválido.';
    if (!in_array($estado, ['activo', 'inactivo'])) $errores[] = 'Estado inválido.';

    if (count($errores) === 0) {
        $datos = compact('nombre', 'apellido', 'dni', 'direccion', 'email', 'estado', 'fecha_alta');
        addPaciente($conexion, $datos);
        header('Location: ../public/lista_pacientes.php');
        exit;
    }
}

?>