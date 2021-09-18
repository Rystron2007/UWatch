<?php
  require_once 'controllers/ProductoController.php';
  $controlador= new ProductoController();
  $resultados = $controlador->listarProductos();
?>
<div class="contenedor-grid row">
  <div class="card-group col-12">
    <?php foreach($resultados as $dato): ?>
    <div class="card border border-warning m-2 p-2 rounded rounded-3 ">
      <img class="card-img-top" 
      src="data:image/png; base64, <?php echo base64_encode($dato['imagen']);?>"alt="Producto"
      height=200px >
      <div class="card-body d-flex flex-column justify-content-center text-center">
        <h4 class="card-title">
          <?php echo $dato['nombre']?>
        </h4>
        <p class="card-text">
          <?php echo $dato['descripcion']?>
        </p>
        <p class="card-text">
          <?php echo $dato['precio']?>
        </p>
        <a href="producto.php?controlador=producto&accion=eliminarProductos&id_producto=<?php echo $dato['id_producto']?>"
        class="btn btn-danger">
      Eliminar</a>
      <a href="producto.php?controlador=producto&accion=editarProducto&id_producto=<?php echo $dato['id_producto']?>"
        class="btn btn-warning mt-2">
      Editar</a>
      </div>
      
    </div>
    <?php endforeach; ?>
  </div>
    

  <div class="contenedor-button d-flex justify-content-center mt-5">
    <a name="" id="" class="btn btn-primary" href="producto.php?controlador=producto&accion=registrarProducto" role="button">Regresar</a>
  </div>
</div>