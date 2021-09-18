<?php
  require_once 'controllers/ProductoController.php';
  $controlador= new ProductoController();
  $resultados = $controlador->listarProductosId();
?>

<form action="producto.php?controlador=producto&accion=editar&id_producto=<?php echo $resultados['id_producto']?>" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
    <input type="text" class="form-control p-2" id="nombre" name="nombre" value="<?php echo $resultados['nombre']?>">
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripción:<span class="text-danger">*</span></label>
    <input type="text" class="form-control p-2" id="descripcion" name="descripcion" value="<?php echo $resultados['descripcion']?>">
  </div>

  <div class="mb-3">
    <label for="precio" class="form-label">Precio<span class="text-danger">*</span></label>
    <input type="number" class="form-control p-2" id="precio" name="precio" value="<?php echo $resultados['precio']?>">
  </div>
  <div class="mb-3 d-flex justify-content-evenly">
    <button type="submit" class="btn btn-primary">Editar</button>
  </div>
  <div class="col-md-12 p-0 text-center">
    <h2 class="text-<?php echo $_SESSION['color'] ?> fw-bold m-0 p-3" style="font-size: 20px;"><?php if(isset($_SESSION['mensajeRegistro'])){ echo $_SESSION['mensajeRegistro']; $_SESSION['mensajeRegistro'] = "";}?></h2>
  </div>
</form>
