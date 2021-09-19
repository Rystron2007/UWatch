<form action="index.php?controlador=usuarios&accion=registrarA" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="usuario" class="form-label">Usuario <span class="text-danger">*</span></label>
    <input type="text" class="form-control p-2" id="usuario" name="usuario">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
    <input type="text" class="form-control p-2" id="email" name="email">
  </div>

  <div class="mb-3">
    <label for="contrasena" class="form-label">Contraseña <span class="text-danger">*</span></label>
    <input type="password" class="form-control p-2" id="contrasena" name="contrasena">
  </div>

  <div class="mb-3">
    <label for="genero" class="form-label">Género <span class="text-danger">*</span></label>
    <select class="form-select" name="genero" id="genero">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select>
  </div>
  <div class="mb-3">
  <label for="cargo"class="form-label">Cargo <span class="text-danger">*</span></label>
    <select class="form-select" name="cargo" id="cargo" onchange="cargoEspecial()">
        <option value="Cliente">Cliente</option>
        <option value="Vendedor">Vendedor</option>
        <option value="Directivo">Directivo</option>
        <option value="Administrador">Administrador</option>
    </select>
  </div>

  <div class="mb-3 d-flex justify-content-evenly">
    <button type="submit" class="btn btn-primary m-3">Agregar</button>
    <a  class="btn btn-primary m-3" href="index.php?controlador=usuarios&accion=mostrarAdministrador">Mostrar Usuarios</a>
  </div>
  <div class="col-md-12 p-0 text-center">
    <h2 class="text-<?php echo $_SESSION['color'] ?> fw-bold m-0 p-3" style="font-size: 20px;"><?php if(isset($_SESSION['mensajeRegistro'])){ echo $_SESSION['mensajeRegistro']; $_SESSION['mensajeRegistro'] = "";}?></h2>
  </div>
</form>