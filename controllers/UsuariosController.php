<?php

require_once 'models/UsuariosModel.php';

class UsuariosController {

  private $model;

  public function __construct() {
    $this->model = new UsuariosModel();
  }

  // funcion del controlador
  public function index() {
    //llamar al modelo, obtener los  datos que me da el modelo
    $resultados = $this->model->listar();
    // llamar a la vista (incluir la vista)
    require_once 'views/principal.php';
  }

  public function inicioSesion() {
    // llamar a la vista
    require_once 'views/sesion/iniciarSesionView.php';
  }

  public function registrarUsuario() {
    // llamar a la vista
    require_once 'views/usuarios/usuarioNuevoView.php';
  }

  public function registrar() {
    $usuario = htmlentities($_POST['usuario']);
    $email = htmlentities($_POST['email']);
    $contrasena = htmlentities($_POST['contrasena']);
    $genero = htmlentities($_POST['genero']);
    $cargo = htmlentities($_POST['cargo']);

    //llamar al modelo
    $resultado = $this->model->insertar($usuario, $email, $contrasena, $genero,$cargo);

    $msj = '¡Usuario Registrado Correctamente!';
    $color = 'primary';

    if (!$resultado) {
      $msj = "¡No se ha podido REGISTRAR!";
      $color = "danger";
    }
    session_start();
    $_SESSION['mensajeRegistro'] = $msj;
    $_SESSION['color'] = $color;

    header('Location:index.php?controlador=usuarios&accion=registrarUsuario');
  }

  public function ingresar() {
    $usuario = htmlentities($_POST['usuario']);
    $contrasena = htmlentities($_POST['contrasena']);

    //llamar al modelo
    $resultado = $this->model->consultar($usuario, $contrasena);

    if (isset($resultado)) {
      header('Location:index.php?controlador=usuarios&accion=index');
    }else{
      session_start();
      $_SESSION['mensajeIngreso'] = "¡No se ha podido INGRESAR!";
      $_SESSION['color'] = "danger";
      header('Location:index.php?controlador=usuarios&accion=inicioSesion');
    }
  }
}
