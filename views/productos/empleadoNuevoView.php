<!-- incluimos  Encabezado -->
<?php require_once 'views/partials/encabezado.php'; ?>

<div class="container">
  <div class="card card-body">
    <form action="index.php?c=empleados&a=agregar" method="POST" name="formEmpNuevo" id="formEmpNuevo">
      <div class="form-row">
        <div class="form-group col-sm-6">
          <label for="nombre_completo">Nombre Completo</label>
          <input type="text"  name="nombre_completo" id="nombre_completo" class="form-control" placeholder="Nombre" autofocus="" required/>
        </div>
        <div class="form-group col-sm-6">
          <label for="sueldo">Sueldo</label>
          <input type="text" name="sueldo" id="sueldo" class="form-control" placeholder="Sueldo" required>
        </div>
        <div class="form-group col-sm-6">
          <label for="cargo">Cargo</label>
          <input type="text" name="cargo" id="cargo" class="form-control" placeholder="Cargo" required>
        </div>
        <div class="form-group mx-auto">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <a href="index.php?c=empleados&a=index" class="btn btn-primary">Cancelar</a>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- incluimos  pie de pagina -->
<?php require_once 'views/partials/piedepagina.php'; ?>
