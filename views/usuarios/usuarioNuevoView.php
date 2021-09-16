<?php require_once 'views/partials/encabezado.php'; ?>

<div class="container-fluid p-0 text-center">
  <h2 class="text-dark m-0 p-3" style="font-size: 90px;">CREAR CUENTA</h2>
</div>

<div class="container-fluid text-light pb-4 ">
  <div class="container-sm w-25 bg-dark rounded rounded-5 p-3">
    <form action="index.php?controlador=usuarios&accion=registrar" method="POST" name="formUserNuevo" id="formUserNuevo">
      <div class="row text-center">
        <div class="col-md-12 p-3">
          <label for="usuario">Usuario</label>
          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" autofocus="" required/>
        </div>
        <div class="col-md-12 p-3">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="col-md-12 p-3">
          <label for="contrasena">Contraseña</label>
          <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contrasena" required>
        </div>
        <div class="col-md-12 p-3">
          <label for="genero">Género</label>
          <select class="form-select" name="genero" id="genero">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
        </div>
        <div class="col-md-12 p-3">
          <label for="cargo">Cargo</label>
          <select class="form-select" name="cargo" id="cargo" onchange="cargoEspecial()">
            <option value="Cliente">Cliente</option>
            <option value="Vendedor">Vendedor</option>
            <option value="Directivo">Directivo</option>
            <option value="Administrador">Administrador</option>
          </select>
        </div>
        <div class="col-md-12 p-0">
          <h2 class="text-success fw-bold m-0 p-3" style="font-size: 20px;"><?php if(isset($_SESSION['mensajeRegistro'])){ echo $_SESSION['mensajeRegistro']; $_SESSION['mensajeRegistro'] = "";}?></h2>
        </div>
        <div class="col-md-12 p-3">
          <button type="submit" class="btn btn-warning text-dark">Guardar</button>
          <a href="index.php?controlador=usuarios&accion=index" class="btn btn-light text-dark">Cancelar</a>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="container-fluid p-0 text-center">
  <h2 class="text-dark m-0 p-3" style="font-size: 30px;">¿Ya posee una cuenta?
    <a href="index.php?controlador=usuarios&accion=inicioSesion" class="text-primary text-decoration-underline">INGRESA AHORA</a>
  </h2>

</div>
<!-- incluimos  pie de pagina -->
<script type="text/javascript" src="assets/js/solicitudesAjax.js">
<?php require_once 'views/partials/piedepagina.php'; ?>
