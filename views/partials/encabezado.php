<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="assets/css/styles.css" rel="stylesheet">

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
    <nav id="navBar" class="navbar navbar-expand-lg navbar-light " style="background-color: #ffc300;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php?controlador=usuarios&accion=index" style="font-size: 40px;">
          <img class="d-inline-block mx-auto" src="assets/images/logo.png" alt="" width="100" height="100">
          UWATCH
        </a>
        <div class="d-flex justify-content-end container-sm">
          <ul id="menu" class="nav navbar-nav nav-left" style="font-size: 20px;">
            <li class="nav-item"><a class="nav-link" href="catalogo.html">Catálogo</a></li>
            <li class="nav-item"><a class="nav-link" href="contacto.html">Contactos</a></li>
            <li class="nav-item"><a class="nav-link text-light bg-dark rounded-pill" href="index.php?controlador=usuarios&accion=inicioSesion">
              <?php
              session_start();
              if(isset($_SESSION['usuario'])){
                echo "Cerrar Sesión";
              }else{
                echo "Iniciar Sesión";
              }
             ?></a>
           </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
