<?php

require_once 'config/Conexion.php';

class UsuariosModel {

  private $con;

  // constructor
  public function __construct() {
    $this->con = Conexion::getConexion(); // :: para acceder a funciones  static
  }

  public function listar() { // listar todos los productos
    $sql = "select * from empleado";
    // preparar la sentencia
    $stmt = $this->con->prepare($sql);
    // ejecutar la sentencia
    $stmt->execute();
    // recuperar los datos (en caso de select)
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // retornar resultados
    return $resultados;
  }

  public function consultar($usuario, $contrasena) { // listar todos los productos
    $sql = "select * from Usuario where usuario = :usuario AND contrasena = :contrasena";
    // preparar la sentencia
    $stmt = $this->con->prepare($sql);
    $data = [
      'usuario' => $usuario,
      'contrasena' => $contrasena,
    ];
    // ejecutar la sentencia
    $stmt->execute($data);
    // recuperar los datos (en caso de select)
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if(isset($usuario)){
      session_start();
      $_SESSION['usuario'] = $usuario['usuario'];
      $_SESSION['cargo'] = $usuario['cargo'];
    }
    // retornar resultados
    return $usuario;
  }


  public function insertar($usuario, $email, $contrasena, $genero,$cargo) {
    $sql = "INSERT INTO Usuario (usuario, email, contrasena, genero, cargo)
    VALUES (:usuario, :email, :contrasena, :genero, :cargo)";

    $sentencia = $this->con->prepare($sql);
    $data = [
      'usuario' => $usuario,
      'email' => $email,
      'contrasena' => $contrasena,
      'genero' => $genero,
      'cargo' => $cargo
    ];

    $sentencia->execute($data);
    if ($sentencia->rowCount() <= 0) {
      return false;
    }
    return true;
  }

  public function actualizar($cod, $nom, $desc, $estado, $precio, $idCat, $usu, $id) {
    //prepare
    $sql = "UPDATE `productos` SET `prod_id`=null,`prod_codigo`=:cod,`prod_nombre`=:nom,`prod_descripcion`=:desc,".
    "`prod_estado`=:estado,`prod_precio`=:precio,`prod_idCategoria`=:idCat,`prod_usuarioActualizacion`=:usu,".
    "`prod_fechaActualizacion`=:fecha WHERE prod_id=:id";
    //now());
    //bind parameters
    $sentencia = $this->con->prepare($sql);
    $fechaActual = new DateTime('NOW');
    $strfecha = $fechaActual->format('Y-m-d H:i:s');
    $data = [
      'cod' => $cod,
      'nom' => $nom,
      'desc' => $desc,
      'estado' => $estado,
      'precio' => $precio,
      'idCat' => $idCat,
      'usu' => $usu,
      'fecha' => $strfecha,
      'id' => $id,

    ];
    //execute
    $sentencia->execute($data);
    //retornar resultados,
    if ($sentencia->rowCount() <= 0) {// verificar si se inserto
      //rowCount permite obtner el numero de filas afectadas
      return false;
    }
    return true;
  }

  public function eliminar($id) {
    //prepare
    $sql = "UPDATE `productos` SET `prod_estado`=0,`prod_usuarioActualizacion`=:usu,".
    "`prod_fechaActualizacion`=:fecha WHERE prod_id=:id";
    //now());
    //bind parameters
    $sentencia = $this->con->prepare($sql);
    $fechaActual = new DateTime('NOW');
    $strfecha = $fechaActual->format('Y-m-d H:i:s');
    $data = [
      'usu' => $usu,
      'fecha' => $strfecha,
      'id' => $id
    ];
    //execute
    $sentencia->execute($data);
    //retornar resultados,
    if ($sentencia->rowCount() <= 0) {// verificar si se inserto
      //rowCount permite obtner el numero de filas afectadas
      return false;
    }
    return true;

  }

  public function buscar($nombre) {

  }

}
