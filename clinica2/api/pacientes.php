<?php
require_once('../conf/conf.php');
require_once('../funciones/funciones_input.php');
require_once('../funciones/funciones_pacientes.php');

$nombre = test_input($_POST['nombre'] ?? null);
$apellido = test_input($_POST['apellido'] ?? null);
$dni = test_input($_POST['dni'] ?? null);
$direccion = test_input($_POST['direccion'] ?? null);
$email = test_input($_POST['email'] ?? null);
$estado = test_input($_POST['estado'] ?? null);
$fecha_alta = test_input($_POST['fecha_alta'] ?? null);

$errores = array();
if (isset($_POST['submit'])) {

  if (empty($nombre)) {
    array_push($errores, 'Usted debe ingresar un nombre.');
  }

  if (empty($apellido)) {
    array_push($errores, 'Usted debe ingresar un apellido.');
  }

  if (empty($dni) || !preg_match('/^[0-9]{7,8}$/', $dni)) {
    array_push($errores, 'Debe ingresar un DNI válido (7 u 8 dígitos).');
  }

  if (empty($direccion)) {
    array_push($errores, 'Usted debe ingresar una dirección.');
  }

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($errores, 'Usted debe ingresar un correo electrónico válido.');
  }

  if (empty($estado) || !in_array($estado, ['activo', 'inactivo'])) {
    array_push($errores, 'Debe seleccionar un estado válido.');
  }

  if (empty($fecha_alta) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha_alta)) {
    array_push($errores, 'Debe ingresar una fecha válida en formato YYYY-MM-DD.');
  }
  
  header('Content-Type: application/json');
    
  if (count($errores) == 0) {
    // Insertar paciente
    addPaciente($conexion, array(
      'nombre' => $nombre,
      'apellido' => $apellido,
      'dni' => $dni,
      'direccion' => $direccion,
      'email' => $email,
      'estado' => $estado,
      'fecha_alta' => $fecha_alta
    ));
    echo json_encode(['success' => true]);
    
    
  }else {
    echo json_encode(['success' => false, 'errores' => $errores]);
  }
  exit;
}

?>