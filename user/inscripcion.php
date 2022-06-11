<?php include("../template/cabecera.php"); ?>

<div class="container mb-3 p-3">
  <div class="row">
    <div class="card text-center">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link" aria-current="true" href="perfil.php">Mi Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="true" href="miscursos.php">Mis Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="true" href="#">Inscripciones</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
      <h1 class="purple"><strong>Bienvenid@ nuevamente</strong></h1>
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-success">frontend</h5>
            <p class="card-text">React</p>
            <a href="#" class="btn btn-warning rounded-pill">¡Quiero aplicar! </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-primary">Backend</h5>
            <p class="card-text">Node</p>
            <a href="#" class="btn btn-warning rounded-pill">¡Quiero aplicar!</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-danger">Fullstack</h5>
            <p class="card-text">Fullstack JS</p>
            <a href="#" class="btn btn-warning rounded-pill">¡Quiero aplicar!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("../template/pie.php"); ?>