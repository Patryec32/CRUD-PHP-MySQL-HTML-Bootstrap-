<?php include("../template/cabecera.php"); ?>
<div class="container mb-3 p-3">
    <div class="row">
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="true" href="#">Mi Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="true" href="miscursos.php">Mis Cursos</a>
            </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="true" href="inscripcion.php">Inscripciones</a>
          </li>            
          </ul>
        </div>

      <div class="card-body">        
        <div class="row"> 
          <h3>Datos Personales</h3>            
          <div class="col-sm border-top border-info border-5 rounded-3 m-3">   
           <dl class="row">
              <dt class="col-sm-6">Nombre</dt>
              <dd class="col-sm-6">Anabela</dd>
              <dt class="col-sm-6">Apellido</dt>
              <dd class="col-sm-6">Perez</dd> 
              <dt class="col-sm-6">Fecha de Nacimiento</dt>
              <dd class="col-sm-6">05/02/1983</dd> 
            </dl>
           <dl class="row">
         <form>
                    <fieldset disabled>
                    <legend>Datos de Contacto</legend>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">mail</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="anaperez2022@emae.edu.ar">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">password</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="password">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">País</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Argentina">
                    </div>
                    </fieldset>
                </form>
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
                    Editar<i class="bi bi-pencil-fill"></i>
                    </button> 
          </div>  
          <div class="col-sm"> 
          <img src="../img/alumna.jpg" alt="foto-perfil">
          <div class="mb-3">
              <label for="nombre">Seleccione una imagen</label>
              <input name="imagen_alumno" type="file"  id="imagen_usuario"class="form-control ">
            </div>
        </div>  
      </div> 
<!-- Modal -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar datos de contactos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" id="formulario" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-body">  
            <div class="mb-3">
              <label for="email">Ingrese el email</label>
              <input name="email" type="email" placeholder="Ingrese email" class="form-control">
            </div>                    
            <div class="mb-3">
              <label for="password">Ingrese contraseña</label>
              <input name="password" type="tel" placeholder="Ingrese password" class="form-control">
            </div>                    
            <div class="modal-footer">
              <input type="hidden" name="id_usuario" id="id_usuario">
              <input type="hidden" name="operacion" id="operacion">
              <input type="submit" name="action" id="action" class="btn btn-success" value="Guardar">
              <button type="button" data-bs-dismiss="modal" class="btn btn-outline-secondary">Cancelar</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include("../template/pie.php"); ?>