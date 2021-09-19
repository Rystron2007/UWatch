<?php
  require_once 'controllers/UsuariosController.php';
  $controlador= new UsuariosController();
  $resultados = $controlador->listarA();
?>
<div class="contenedor-grid row">
    <table class="table table-striped">
        <thead>
        <tr>
            
            <th>Usuario</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Genero</th>
            <th>Cargo</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($resultados as $dato ): ?>
                <tr>
                
                <td><?php echo $dato['usuario']?></td>
                <td><?php echo $dato['email']; ?></td>
                <td><?php echo $dato['contrasena']; ?></td>
                <td><?php echo $dato['genero']; ?></td>
                <td><?php echo $dato['cargo']; ?></td>
                
                <td>
                    <div class="btn-group">
                        <div class="px-1">
                        <a href="index.php?controlador=usuarios&accion=editarAdministrador&id_usuario=<?php echo $dato['id_usuario']?>"
                            class="btn btn-danger"> <i class="fas fa-pencil-alt"></i></a>
                        <a href="index.php?controlador=usuarios&accion=eliminarAdministrador&id_usuario=<?php echo $dato['id_usuario']?>"
                            class="btn btn-danger"><i class="far fa-trash-alt"></i></a>                    
                        
                        
                    </div>
                </td>
            </tr>
            <?php endforeach ?>
            
        
        
        </tbody>
    </table>
  
    

  <div class="contenedor-button d-flex justify-content-center mt-5">
    <a name="" id="" class="btn btn-primary" href="index.php?controlador=usuario&accion=registrarAdministrador" role="button">Regresar</a>
  </div>
</div>