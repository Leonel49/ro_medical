<?php
require_once('../conf/conf.php'); // conexión DB
require_once('../funciones/funciones_pacientes.php'); // función getPacientes()

$pacientes = getPacientes($conexion); // Traer todos los pacientes
?>

<!DOCTYPE html>
<html lang="es">

<?php require('../views/_header.php'); ?>

<body>

    <?php require('../views/_navbar.php'); ?>

    <div class="container mt-5">
        <h2 class="mb-4">Lista de Pacientes</h2>

        <?php if (count($pacientes) > 0): ?>
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Estado</th>
                        <th>Fecha de Alta</th>
                    </tr>
                </thead>
                <tbody>
                   <!--  < ?php foreach ($pacientes as $paciente): ?>
                        <tr>
                            <td>< ?php echo $paciente['id']; ?></td> 
                            <td>< ?php echo $paciente['nombre']; ?></td>
                            <td>< ?php echo $paciente['apellido']; ?></td>
                            <td>< ?php echo $paciente['dni']; ?></td>
                            <td>< ?php echo $paciente['direccion']; ?></td>
                            <td>< ?php echo $paciente['email']; ?></td>
                            <td>< ?php echo $paciente['estado']; ?></td>
                            <td>< ?php echo $paciente['fecha_alta']; ?></td> 
                        </tr>
                    < ?php endforeach; ?>-->

                    <tr>
                            <td></td> 
                            <td id="nombre"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> 
                        </tr>

                </tbody> 
            </table>

        <?php else: ?>
            <div class="alert alert-info">No hay pacientes registrados.</div>
        <?php endif; ?>

        <a href="../public/index.php" class="btn btn-secondary mt-3">Volver al inicio</a>
    </div>

    <?php require('../views/_footer.php'); ?>

    <?php 
    $nombre = "leonel";
    echo $nombre."HTML";
     ?>
            <script>
                // const pacientes = < ?php echo json_encode($pacientes); ?>
                // console.log(pacientes)
                const nombre = "<?php echo $nombre; ?>"

                // document.getElementById("nombre").innerText = nombre
                $("#nombre").text(nombre+" usando jquery")
            </script>
</body>

</html>