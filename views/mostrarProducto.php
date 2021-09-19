<?php require_once 'partials/encabezado.php'; ?>
<section class="contenedor_menu" id="contendor" >
      <h1 class="card-title text-center pt-2">Productos</h1>
      <div class="contenedor__form p-3" style="min-height:50vh">
        <?php include_once("controllers/controlador_paginas_vendedor.php");
          $controlador= new ControladorPaginas('mostrar');
          $controlador-> establecer();
        ?>
      </div>
</section>
<?php require_once 'views/partials/piedepagina.php'; ?>