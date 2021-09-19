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

  public function indexAdmin() {
    //llamar al modelo, obtener los  datos que me da el modelo
    $resultados = $this->model->listar();
    // llamar a la vista (incluir la vista)
    require_once 'views/principalAdmin.php';
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
    $resultado = $this->model->consultar($usuario, $contrasena);
    if (count($resultado)>1) {
      $ResultadoCargo = $this->model->obtenerCargo($usuario, $contrasena);
      
      if($ResultadoCargo['cargo']=='Vendedor'){
        header('Location:producto.php?controlador=producto&accion=registrarProducto');
      }
      else{
        if($ResultadoCargo['cargo']=='Administrador'){
          header('Location:index.php?controlador=usuarios&accion=registrarAdministrador');
        }else{
          $lisnk='Location:index.php?controlador=usuarios&accion=index';
          header($lisnk);

        }
        
        
      }

    }else{
      session_start();
      $_SESSION['mensajeIngreso'] = "¡No se ha podido INGRESAR!";
      $_SESSION['color'] = "danger";
      header('Location:index.php?controlador=usuarios&accion=inicioSesion');
    }




  }

  /**
   * MODULO ADMINISTRADOR
   */

  public function listarA() {
    //llamar al modelo, obtener los  datos que me da el modelo
    $resultados = $this->model->listar();
    return $resultados;
  }

  public function listarAdministradorId() {
    //llamar al modelo, obtener los  datos que me da el modelo
    $id = htmlentities($_GET['id_usuario']);
    $resultados = $this->model->listarAdmId($id);
    return $resultados;
  }

  public function eliminarA() {
    //llamar al modelo, obtener los  datos que me da el 
    $id = htmlentities($_GET['id_usuario']);
    $resultados = $this->model->eliminarAdm($id);
    
    if($resultados==true){
      header('Location:index.php?controlador=usuario&accion=mostrarAdministrador');
    }else{

    }
  }


  public function registrarA() {
    $usuario = htmlentities($_POST['usuario']);
    $email = htmlentities($_POST['email']);
    $contrasena = htmlentities($_POST['contrasena']);
    $genero = htmlentities($_POST['genero']);
    $cargo = htmlentities($_POST['cargo']);  
    $resultado = false;
    //llamar al modelo
    
    if(empty($usuario)||empty($email)||empty($contrasena)||empty($genero)||empty($cargo)){
      $msj = "¡No se ha podido REGISTRAR!";
      $color = "danger";
    }
    else{
      
          $resultado = $this->model->insertarAdm($usuario, $email, $contrasena,$genero,$cargo );
          $msj = '¡Usuario Registrado Correctamente!';
          $color = 'primary';
        
      
    }
    
    

    session_start();
    $_SESSION['mensajeRegistro'] = $msj;
    $_SESSION['color'] = $color;

    header('Location:index.php?controlador=usuarios&accion=registrarAdministrador');
  }

  public function editarAd() {
    $usuario = htmlentities($_POST['usuario']);
    $email = htmlentities($_POST['email']);
    $contrasena = htmlentities($_POST['contrasena']);
    $genero = htmlentities($_POST['genero']);
    $cargo = htmlentities($_POST['cargo']);  
    $id = htmlentities($_GET['id_usuario']);
    $resultado = false;
    //llamar al modelo
    
    if(empty($usuario)||empty($email)||empty($contrasena)||empty($genero)||empty($cargo)){
      $msj = "¡No se ha podido REGISTRAR!";
      $color = "danger";
    }
    else{
      
          $resultado = $this->model->actualizarAdm($id,$usuario, $email, $contrasena,$genero,$cargo );
          $msj = '¡Usuario Registrado Correctamente!';
          $color = 'primary';
        
      
    }
    
    

    session_start();
    $_SESSION['mensajeRegistro'] = $msj;
    $_SESSION['color'] = $color;

    header('Location:index.php?controlador=usuarios&accion=mostrarAdministrador');

  }

  public function registrarAdministrador() {
    // llamar a la vista
    require 'views/agregarAdministrador.php';
  }
  public function mostrarAdministrador() {
    // llamar a la vista
    require 'views/mostrarAdministrador.php';
  }
  public function editarAdministrador() {
    // llamar a la vista
    require 'views/editarAdministrador.php';
  }





}
