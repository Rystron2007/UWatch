<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/styles.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
      rel="stylesheet"
    />

    <title>UWatch</title>
  </head>
  <body>
    <header>
      <nav
        id="navBar"
        class="navbar navbar-expand-lg navbar-light"
        style="background-color: #ffc300"
      >
        <div class="container-fluid">
          <a
            class="navbar-brand"
            href="index.php?controlador=usuarios&accion=index"
            style="font-size: 40px"
          >
            <img
              class="d-inline-block mx-auto"
              src="assets/images/logo.png"
              alt=""
              width="100"
              height="100"
            />
            UWATCH
          </a>
          <div class="d-flex justify-content-end container-sm">
            <ul
              id="menu"
              class="nav navbar-nav nav-left"
              style="font-size: 20px"
            >
              <li class="nav-item">
                <a class="nav-link" href="index.php?controlador=producto&accion=catalogo">Catálogo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.html">Contactos</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link text-light bg-dark rounded-pill"
                  href="index.php?controlador=usuarios&accion=inicioSesion"
                >
                  <?php
              session_start();
              if(isset($_SESSION['usuario'])){
                echo "Cerrar Sesión";
              }else{
                echo "Iniciar Sesión";
              }
              ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <section class="contenedor_menu" id="contendor" ">
      <h1 class="card-title text-center pt-2">Catálogo</h1>
      <div class="contenedor-boton d-flex justify-content-center">
        <button id="boton"class="btn btn-primary">Mostrar Catálogo</button>
      </div>
      <div class="contenedor__form p-3" style="min-height:50vh">
        <div class="contenedor-grid row">
          <div id="contenedor" class="card-group col-12">
    
    
          </div>
    </section>
    <footer>
      <div class="container-fluid m-0 p-0" style="background-color: #ffc300">
        <div class="row text-center">
          <div class="col m-3 p-1">
            <h6>Suscripción</h6>
            <form class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <p class="text-dark">
                    Suscríbase a nuestros planes de por vida.
                  </p>
                  <input
                    type="email"
                    class="form-control text-center"
                    id="suscripcionEmail"
                    placeholder="Correo electrónico"
                  />
                </div>
                <div class="col-12 pt-3">
                  <button type="submit" onclick="" class="btn btn-primary">
                    Suscribirse
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="col m-3 p-1">
            <h6>Empresa</h6>
            <a class="nav-link" href="#">Contactos</a>
          </div>
          <div class="col m-3 p-1">
            <h6>Tienda</h6>
            <a class="nav-link" href="index.php?controlador=producto&accion=catalogo">Catálogo</a>
          </div>
          <div class="col m-3 p-1">
            <h6>Redes Sociales</h6>
            <a class="nav-link" href="https://www.facebook.com/">Facebook</a>
            <a class="nav-link" href="https://www.instagram.com/">Instagram</a>
            <a class="nav-link" href="https://www.youtube.com/">Youtube</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="Ajax/ajax.js"></script>
  </body>
</html>
