<?php require('../controllers/pacientesController.php') ?>


<!DOCTYPE html>
<html lang="en">

<?php require('../views/_header.php'); ?>

<body>
  <div class="container mt-4">
    <h1>Agregar Paciente</h1>

    <ul>
      <?php foreach ($errores as $error): ?>
        <li class="text text-danger"><?php echo $error; ?></li>
      <?php endforeach ?>
    </ul>

    <form id="formAgregarPaciente" class="m-3" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre ?? ''; ?>" required>
      </div>

      <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido ?? ''; ?>" required>
      </div>

      <div class="mb-3">
        <label for="dni" class="form-label">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" value="<?php echo $dni ?? ''; ?>" required>
      </div>

      <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono ?? ''; ?>">
      </div>

      <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $direccion ?? ''; ?>">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?? ''; ?>">
      </div>

      <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <select class="form-control" id="estado" name="estado" required>
          <option value="">Seleccionar estado</option>
          <option value="activo" <?php if (($estado ?? '') === 'activo') echo 'selected'; ?>>Activo</option>
          <option value="inactivo" <?php if (($estado ?? '') === 'inactivo') echo 'selected'; ?>>Inactivo</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="foto" class="form-label">Foto (opcional)</label>
        <input type="file" class="form-control" id="foto" name="foto">
      </div>

      <button type="submit" class="btn btn-success" name="submit">Agregar Paciente</button>
      <a href="../public/lista_pacientes.php" class="btn btn-danger">Cancelar</a>
    </form>
  </div>


  <?php require('../views/_footer.php'); ?>
</body>

</html>