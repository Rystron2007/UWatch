<?php require_once 'views/partials/encabezado.php'; ?>

<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <video class="video-fluid" autoplay loop muted>
          <source src="assets/video/watch-1.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <video class="video-fluid" autoplay loop muted>
          <source src="assets/video/watch-2.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <video class="video-fluid" autoplay loop muted>
          <source src="assets/video/watch-3.mp4" type="video/mp4" />
        </video>
      </div>
  </div>
  <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid p-3" style="background-color: black;">
  <div class="container-fluid pt-3">
    <h2 class="text-center text-light" style="font-size: 80px;">TENDENCIA</h2>
  </div>
  <div class="container-fluid rounded">
    <div class="row text-center">
      <div class="col m-3 p-1">
        <div class="card bg-image hover-zoom">
          <a href="catalogo.html"><images class="card-img" src="assets/images/watches/watch-1.jpg" alt=""></a>
        </div>
      </div>
      <div class="col m-3 p-1">
        <div class="card bg-image hover-zoom">
          <a href="catalogo.html"><img class="card-img" src="assets/images/watches/watch-3.jpg" alt=""></a>
        </div>
      </div>
      <div class="col m-3 p-1" >
        <div class="card bg-image hover-zoom">
          <a href="catalogo.html"><img class="card-img" src="assets/images/watches/watch-2.jpg" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid m-0 p-0 " style="background-color: black;">
  <div class="container-fluid bg-light" >
    <div class="row d-flex justify-content-center">
      <div class="col m-3 p-1 bg-image hover-overlay hover-zoom" >
        <img class="img-fluid border border-dark border-3 rounded" src="assets/images/relojes/reloj1.jpg" alt="">
        <a href="catalogo.html">
          <div class="mask" style="background-color: rgba(255, 255, 255, 0.2)"></div>
        </a>
      </div>
      <div class="col m-3 p-1 bg-image hover-overlay hover-zoom" >
        <img class="img-fluid border border-dark border-3 rounded" src="assets/images/relojes/reloj2.jpg" alt="">
        <a href="catalogo.html">
          <div class="mask" style="background-color: rgba(255, 255, 255, 0.2)"></div>
        </a>
      </div>
      <div class="col m-3 p-1 bg-image hover-overlay hover-zoom" >
        <img class="img-fluid border border-dark border-3 rounded" src="assets/images/relojes/reloj3.jpg" alt="">
        <a href="catalogo.html">
          <div class="mask" style="background-color: rgba(255, 255, 255, 0.2)"></div>
        </a>
      </div>
      <div class="col m-3 p-1 bg-image hover-overlay hover-zoom" >
        <img class="img-fluid border border-dark border-3 rounded" src="assets/images/relojes/reloj4.jpg" alt="">
        <a href="catalogo.html">
          <div class="mask" style="background-color: rgba(255, 255, 255, 0.2)"></div>
        </a>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col m-3 p-1 bg-image hover-overlay hover-zoom">
        <img class="img-fluid border border-dark border-3 rounded hover-shadow" src="assets/images/relojes/reloj5.jpg" alt="">
        <a href="catalogo.html">
          <div class="mask" style="background-color: rgba(255, 255, 255, 0.2)"></div>
        </a>
      </div>
      <div class="col m-3 p-1 bg-image hover-overlay hover-zoom">
        <img class="img-fluid rounded border border-dark border-3 rounded" src="assets/images/relojes/reloj6.jpg" alt="">
        <a href="catalogo.html">
          <div class="mask" style="background-color: rgba(255, 255, 255, 0.2)"></div>
        </a>
      </div>
      <div class="col m-3 p-1 bg-image hover-overlay hover-zoom">
        <img class="img-fluid rounded border border-dark border-3 rounded" src="assets/images/relojes/reloj7.jpg" alt="">
        <a href="catalogo.html">
          <div class="mask" style="background-color: rgba(255, 255, 255, 0.2)"></div>
        </a>
      </div>
      <div class="col m-3 p-1 bg-image hover-overlay hover-zoom">
        <img class="img-fluid rounded border border-dark border-3 rounded" src="assets/images/relojes/reloj8.jpg" alt="">
        <a href="catalogo.html">
          <div class="mask" style="background-color: rgba(255, 255, 255, 0.2)"></div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="table-responsive mt-2">
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <th>ID_Empleado</th>
        <th>Nombre Completo</th>
        <th>Sueldo</th>
        <th>Cargo</th>
      </thead>
      <tbody class="tabladatos">
        <?php
        foreach ($resultados as $fila) {
          ?>
          <tr>
            <td><?php echo $fila['id_empleado'];?></td>
            <td><?php echo $fila['nombre_completo'];?></td>
            <td><?php echo $fila['sueldo'];?></td>
            <td><?php echo $fila['cargo'];?></td>
          </tr>
        <?php  }?>
      </tbody>
    </table>
  </div>

</div>
<?php require_once 'views/partials/piedepagina.php'; ?>
