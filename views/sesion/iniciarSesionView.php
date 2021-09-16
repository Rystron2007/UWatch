<?php require_once 'views/partials/encabezado.php'; ?>

<div class="container-fluid p-0 text-center">
  <h2 class="text-dark m-0 p-3" style="font-size: 90px;">INICIAR SESIÓN</h2>
</div>

<div class="container-fluid text-light pb-4 ">
  <div class="container-sm w-25 bg-dark rounded rounded-5 p-3">

    <form action="index.php?controlador=usuarios&accion=ingresar" method="POST" name="formInicioSesion" id="formInicioSesion">
      <div class="row text-center">
        <div class="col-md-12 p-3">
          <label for="usuario">Usuario</label>
          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" autofocus="" required/>
        </div>
        <div class="col-md-12 p-3">
          <label for="contrasena">Contraseña</label>
          <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña" required>
        </div>
        <div class="col-md-12 p-0">
          <h2 class="text-<?php echo $_SESSION['color'] ?> fw-bold m-0 p-3" style="font-size: 20px;"><?php if(isset($_SESSION['mensajeIngreso'])){ echo $_SESSION['mensajeIngreso']; $_SESSION['mensajeIngreso'] = "";}?></h2>
        </div>
        <div class="col-md-12 p-3">
          <button type="submit" class="btn btn-warning text-dark">Ingresar</button>
          <a href="index.php?controlador=usuarios&accion=registrarUsuario" class="btn btn-light text-dark">Registrar</a>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="container-fluid p-0 text-center">
  <h2 class="text-dark m-0 p-3" style="font-size: 30px;">¡Un mundo nuevo te espera!
    <a href="index.php?controlador=usuarios&accion=registrarUsuario" class="text-primary text-decoration-underline">INGRESA AHORA</a>
  </h2>

</div>

<!-- incluimos  pie de pagina -->
<?php require_once 'views/partials/piedepagina.php'; ?>
