<?php
require_once('../conf/conf.php');
require_once('../funciones/funciones_input.php');
require_once('../funciones/funciones_pacientes.php');

$nombre = test_input($_POST['nombre'] ?? null);
$edad = test_input($_POST['edad'] ?? null);
$direccion = test_input($_POST['direccion'] ?? null);
$telefono = test_input($_POST['telefono'] ?? null);
$foto = $_FILES['foto'] ?? null;

$errores = array();

if (isset($_POST['submit'])) {

  if (empty($nombre)) {
    array_push($errores, 'Usted debe ingresar un nombre.');
  }

  if (!filter_var($edad, FILTER_VALIDATE_INT)) {
    array_push($errores, 'Usted debe ingresar una edad válida.');
  }

  if (empty($direccion)) {
    array_push($errores, 'Usted debe ingresar una dirección.');
  }

  if (empty($telefono) || !preg_match('/^[0-9]{10}$/', $telefono)) {
    array_push($errores, 'Usted debe ingresar un número de teléfono válido.');
  }

  if ($foto['error'] == '0') {

    $info = pathinfo($foto['name']);
    $extensiones_permitidas = array('jpg', 'png', 'gif');

    if (!in_array($info['extension'], $extensiones_permitidas)) {
      array_push($errores, 'Usted debe cargar un archivo con formato jpg, png o gif.');
    }

  } else {
    array_push($errores, 'Usted debe cargar una foto.');
  }

  if (count($errores) == 0) {

    $foto_path = time() . $foto['name'];

    move_uploaded_file($foto['tmp_name'], $foto_path);

    addPaciente($conexion, array(
      'nombre' => $nombre,
      'edad' => $edad,
      'direccion' => $direccion,
      'telefono' => $telefono,
      'foto' => $foto_path
    ));

    // header('Location: lista_pacientes.php');
  }
  echo"nombre: {$nombre}";
}
?>