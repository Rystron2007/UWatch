<form action="producto.php?controlador=producto&accion=registrar" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
    <input type="text" class="form-control p-2" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripción:<span class="text-danger">*</span></label>
    <input type="text" class="form-control p-2" id="descripcion" name="descripcion">
  </div>

  <div class="mb-3">
    <label for="precio" class="form-label">Precio<span class="text-danger">*</span></label>
    <input type="number" class="form-control p-2" id="precio" name="precio">
  </div>
  <div class="mb-3">
    <label for="imagen" class="form-label">Imagen<span class="text-danger">*</span></label>
    <input  type="file" accept="image/png" name="imagen" class="form-control p-2" id="imagen" name="imagen">
  </div>
  <div class="mb-3 d-flex justify-content-evenly">
    <button type="submit" class="btn btn-primary m-3">Agregar</button>
    <a  class="btn btn-primary m-3" href="producto.php?controlador=producto&accion=mostrarProducto">Mostrar Porductos</a>
  </div>
  <div class="col-md-12 p-0 text-center">
    <h2 class="text-<?php echo $_SESSION['color'] ?> fw-bold m-0 p-3" style="font-size: 20px;"><?php if(isset($_SESSION['mensajeRegistro'])){ echo $_SESSION['mensajeRegistro']; $_SESSION['mensajeRegistro'] = "";}?></h2>
  </div>
</form>