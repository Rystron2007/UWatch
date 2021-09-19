<?php require_once 'views/partials/encabezado.php'; ?>
<script src="https://kit.fontawesome.com/4ae6ea23e2.js" crossorigin="anonymous"></script>
<h1 class="text-center">ADMINISTRADOR</h1>
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--CAROUSEL-->
  
  <div class="container">
    <div class="table-responsive mt-2">
      <table class="table table-striped table-bordered">
        <thead class="thead-dark">
          <th>ID_Empleado</th>
          <th>Nombre Completo</th>
          <th>Sueldo</th>
          <th>Cargo</th>
          <th>Acciones</th>
          
        </thead>
        <tbody class="tabladatos">
          <?php
          foreach ($resultados as $fila =>$values): ?>
            
            <tr>
            <td><?php echo ($fila+1)?></td>
            <td><?php echo $values["usuario"]; ?></td>
            <td><?php echo $values["email"]; ?></td>
            <td><?php echo $values["contraseña"]; ?></td>
            <td><?php echo $values["genero"]; ?></td>
            <td><?php echo $values["cargo"]; ?></td>
              <td>
              <div class="btn-group">
                    <div class="px-1">
                    <a href="index.php?pagina=editar&id=<?php echo $values["id"];?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                  
                    <form method="post">
                        <input type="hidden" value="<?php echo $values["id"];?>"name="eliminarRegistro">
                        <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        
                        
                        
                    </form>
                    
                </div>
              </td>
            </tr>
          <?php  endforeach ?>
        </tbody>
      </table>
    </div>

  </div>
  <?php require_once 'views/partials/piedepagina.php'; ?>

