<?php

require_once 'models/productoModel.php';
require_once 'config/Conexion.php';
class ProductoController {

  private $model;
  private $con;

  // constructor

  public function __construct() {
    $this->model = new ProductoModel();
    $this->con = Conexion::getConexion();
  }



  // funcion del controlador
  public function listarProductos() {
    //llamar al modelo, obtener los  datos que me da el modelo
    $resultados = $this->model->listar();
    return $resultados;
  }
  public function listarProductosId() {
    //llamar al modelo, obtener los  datos que me da el modelo
    $id = htmlentities($_GET['id_producto']);
    $resultados = $this->model->listarId($id);
    return $resultados;
  }

  public function eliminarProductos() {
    //llamar al modelo, obtener los  datos que me da el
    $id = htmlentities($_GET['id_producto']);
    $resultados = $this->model->eliminar($id);

    if($resultados==true){
      header('Location:producto.php?controlador=producto&accion=mostrarProducto');
    }else{

    }
  }

  public function registrar() {
    $nombre = htmlentities($_POST['nombre']);
    $descripcion = htmlentities($_POST['descripcion']);
    $precio = htmlentities($_POST['precio']);
    $resultado = false;
    //llamar al modelo

    if(empty($nombre)||empty($descripcion)||empty($precio)){
      $msj = "¡No se ha podido REGISTRAR!";
      $color = "danger";
    }
    else{
      $check=getimagesize($_FILES['imagen']['tmp_name']);
      if($check!==false&& $_FILES['imagen']['size']<=150000){
          $image=$_FILES['imagen']['tmp_name'];
          $tamanoArchivo=$_FILES['imagen']['size'];
          $imagenSubida=fopen($_FILES['imagen']['tmp_name'], 'r');
          $binariosImagen=fread($imagenSubida, $tamanoArchivo);
          $resultado = $this->model->insertar($nombre, $descripcion, $precio, $binariosImagen);
          $msj = '¡Usuario Registrado Correctamente!';
          $color = 'primary';

      }
      else{
        $msj = "¡¡No se ha podido REGISTRAR!..... Escoja una imagen con un tamaño menor o igual a 150KB";
        $color = "danger";
      }
    }

    session_start();
    $_SESSION['mensajeRegistro'] = $msj;
    $_SESSION['color'] = $color;

    header('Location:producto.php?controlador=producto&accion=registrarProducto');
  }


  public function editar() {
    $nombre = htmlentities($_POST['nombre']);
    $descripcion = htmlentities($_POST['descripcion']);
    $precio = htmlentities($_POST['precio']);
    $id = htmlentities($_GET['id_producto']);
    $resultado = false;
    //llamar al modelo

    if(empty($nombre)||empty($descripcion)||empty($precio)){
      $msj = "¡No se ha podido realizar la EDICIÓN de los datos!";
      $color = "danger";
    }
    else{
          $resultado = $this->model->actualizar($id,$nombre, $descripcion, $precio);
          $msj = '¡Usuario Editado Correctamente!';
          $color = 'primary';

      }

    session_start();
    $_SESSION['mensajeRegistro'] = $msj;
    $_SESSION['color'] = $color;

    header('Location:producto.php?controlador=producto&accion=mostrarProducto');
  }


  public function registrarProducto() {
    // llamar a la vista
    require 'views/agregarProducto.php';
  }
  public function mostrarProducto() {
    // llamar a la vista
    require 'views/mostrarProducto.php';
  }
  public function editarProducto() {
    // llamar a la vista
    require 'views/editarProducto.php';
  }
  public function catalogo() {
    // llamar a la vista
    require 'views/catalogo.php';
  }


}
