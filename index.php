<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aprogramar</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--bootstrap-icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body class="text-white body">
<div class="container">
  <div class="row">
    <div class="col col-md-8 offset-md-4 text-end">  
      <form action="login.php" method="POST" class="row g-3">
        <div class="col-auto">
          <input type="email" name="email" class="form-control" id="inputEmail" placeholder="email">
        </div>
        <div class="col-auto">
          <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="col-auto">
          <input type="submit" class="btn btn-success" value="iniciar sesión"/>
        </div>
      </form>
      <div class="p-3">
        <h1 class="display-1">Desarrollo Profesional</h1> 
        <p>Expandí tus oportunidades y vinculaciones laborales, y maximizá tu horizonte profesional</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col col-md-6 offset-md-2 rounded">  
      <h3>Registrate</h3>
      <form action=" " class="p-2 fondo-blanco">
        <label for=""class="form-label">Nombre completo</label>
        <input type="text"placeholder="Nombre completo" class="form-control">
        <label for=""class="form-label">mail</label>
        <input type ="email"placeholder="ejemplo@gmail.com"class="form-control">
        <label for=""class="form-label">password</label>
        <input type ="password" placeholder="Crear contraseña"class="form-control">
        <div class="d-grid gap-2 col-6 mx-auto" data-bs-toggle="modal" data-bs-target="#modalRegistroExitoso">
          <input type="submit"class="btn btn-primary m-2" value="Registrar" onclick="stopDefAction(event);">
        </div>
      </form>
    </div>  
  </div>  
</div> 
<script type="text/javascript">
  function stopDefAction(evt) {
    evt.preventDefault();
  }
</script>
<!-- Modal -->
<div class="modal fade text-dark" id="modalRegistroExitoso" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"> Registro Exitoso!!<i class="bi bi-balloon"></i></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¡Felicitaciones Patricia!</p>
        <span class="display-3">Ya eres parte <i class="bi bi-arrow-through-heart"></i></span>
        <p>Elige algunos de los cursos para empezar</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php include("template/pie.php"); ?>