<!DOCTYPE html>
<html lang="en">

<?php require('../views/_header.php') ?>

<body>
  <?php require('../views/_navbar.php') ?>
  

  <div class="container mt-5">
    <div class="row">

      <!-- Card: Agregar Paciente -->
      <div class="col-md-3">
        <div class="card text-white bg-primary mb-3">
          <div class="card-body text-center">
            <h5 class="card-title">Agregar Paciente</h5>
            <p class="card-text">Registrar un nuevo paciente.</p>
            <a href="../public/agregar_paciente.php" class="btn btn-light">Ingresar</a>
          </div>
        </div>
      </div>

      <!-- Card: Agregar Turno -->
      <div class="col-md-3">
        <div class="card text-white bg-success mb-3">
          <div class="card-body text-center">
            <h5 class="card-title">Agregar Turno</h5>
            <p class="card-text">Asignar un nuevo turno.</p>
            <a href="../public/agregar_turno.php" class="btn btn-light">Ingresar</a>
          </div>
        </div>
      </div>

      <!-- Card: Lista de Pacientes -->
      <div class="col-md-3">
        <div class="card text-white bg-warning mb-3">
          <div class="card-body text-center">
            <h5 class="card-title">Lista de Pacientes</h5>
            <p class="card-text">Ver todos los pacientes.</p>
            <a href="../public/lista_pacientes.php" class="btn btn-light">Ver</a>
          </div>
        </div>
      </div>

      <!-- Card: Lista de Turnos -->
      <div class="col-md-3">
        <div class="card text-white bg-danger mb-3">
          <div class="card-body text-center">
            <h5 class="card-title">Lista de Turnos</h5>
            <p class="card-text">Ver todos los turnos asignados.</p>
            <a href="../public/lista_turnos.php" class="btn btn-light">Ver</a>
          </div>
        </div>
      </div>

    </div>
  </div>


  <?php require('../views/_footer.php') ?>

</body>

</html>