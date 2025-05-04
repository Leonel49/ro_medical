<?php require('../api/pacientes.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Agregar Paciente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-4">
    <h1>Agregar Paciente</h1>

    <ul>
      <?php foreach ($errores as $error): ?>
      <li class="text text-danger"><?php echo $error; ?></li>
      <?php endforeach ?>
    </ul>

    <form class="m-3" method="post"  enctype="multipart/form-data">
      <div class="mb-3">
        <label for="nombre" class="form-label"> Nombre </label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
      </div>

      <div class="mb-3">
        <label for="edad" class="form-label"> Edad </label>
        <input type="number" class="form-control" id="edad" name="edad" value="<?php echo $edad; ?>" required>
      </div>

      <div class="mb-3">
        <label for="direccion" class="form-label"> Dirección </label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $direccion; ?>" required>
      </div>

      <div class="mb-3">
        <label for="telefono" class="form-label"> Teléfono </label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono; ?>" required>
      </div>

      <div class="mb-3">
        <label for="foto" class="form-label"> Foto </label>
        <input type="file" class="form-control" id="foto" name="foto" required>
      </div>

      <button type="submit" class="btn btn-success" name="submit">Agregar Paciente</button>
      <a href="lista_pacientes.php" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
</body>

</html>
