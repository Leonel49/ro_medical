
<?php require('../api/turnos.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cargar Turno</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
</head>
<body>
<?php require('../public/_navbar.php') ?>

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <h1 class="mt-4">Agregar Turno</h1>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-calendar-plus me-1"></i>
                    </div>

                    <div class="card-body">

                        <ul>
                            <?php foreach ($errores as $error): ?>
                                <li class="text text-danger"><?php echo $error ?></li>
                            <?php endforeach ?>
                        </ul>

                        <form class="m-3" method="POST" action="../api/turnos.php">
                            <div class="mb-3">
                                <label for="paciente_id" class="form-label">Paciente</label>
                                <select class="form-control" name="paciente_id" id="paciente_id">
                                    <option value="">Seleccione un paciente</option>
                                    <?php foreach ($pacientes as $paciente): ?>
                                        <option <?php if ($paciente['id'] == $paciente_id) echo 'selected'; ?> value="<?php echo $paciente['id'] ?>">
                                            <?php echo $paciente['nombre'] ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $fecha ?>">
                            </div>

                            <div class="mb-3">
                                <label for="hora" class="form-label">Hora</label>
                                <input type="time" class="form-control" id="hora" name="hora" value="<?php echo $hora ?>">
                            </div>

                            <button type="submit" class="btn btn-success" name="submit">Cargar Turno</button>
                            <a class="btn btn-danger" href="<?php echo BASE_URL ?>lista_turnos.php">Cancelar</a>
                        </form>

                    </div>
                </div>

            </div>
        </main>
    </div>
</div>

<?php require('../public/_footer.php') ?>

</body>
</html>