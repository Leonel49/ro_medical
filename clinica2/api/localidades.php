<?php
require_once('../conf/conf.php');
require_once('../funciones/funciones_input.php');
require_once('../funciones/funciones_localidades.php');

header('Content-Type: application/json');

$provincia_id = test_input($_GET['provincia_id'] ?? null);

if (empty($provincia_id) || !is_numeric($provincia_id)) {
    echo json_encode(['success' => false, 'error' => 'ID de provincia inválido.']);
    exit;
}

try {
    $localidades = obtenerLocalidadesPorProvincia($provincia_id);
    echo json_encode(['success' => true, 'localidades' => $localidades]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'error' => 'Error en la base de datos: ' . $e->getMessage()]);
}

?>