<?php
require_once('../conf/conf.php'); // conexión DB
require_once('../funciones/funciones_pacientes.php'); // función getPacientes()

$pacientes = getPacientes($conexion); // Traer todos los pacientes
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pacientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>

<?php require('_navbar.php'); ?>

<div class="container mt-5">
    <h2 class="mb-4">Lista de Pacientes</h2>

    <?php if (count($pacientes) > 0): ?>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pacientes as $paciente): ?>
                    <tr>
                        <td><?php echo $paciente['id']; ?></td>
                        <td><?php echo $paciente['nombre']; ?></td>
                        <td><?php echo $paciente['apellido']; ?></td>
                        <td><?php echo $paciente['edad']; ?></td>
                        <td><?php echo $paciente['telefono']; ?></td>
                        <td><?php echo $paciente['direccion']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-info">No hay pacientes registrados.</div>
    <?php endif; ?>

    <a href="index.php" class="btn btn-secondary mt-3">Volver al inicio</a>
</div>

<?php require('_footer.php'); ?>

</body>
</html>
