<?php

require_once 'config/Conexion.php';

class ProductoModel {

  private $con;

  // constructor
  public function __construct() {
    $this->con = Conexion::getConexion(); // :: para acceder a funciones  static
  }

  public function listar() { // listar todos los productos
    $sql = "select * from producto";
    // preparar la sentencia
    $stmt = $this->con->prepare($sql);
    // ejecutar la sentencia
    $stmt->execute();
    // recuperar los datos (en caso de select)
    $resultados = $stmt->fetchAll();
    // retornar resultados
    return $resultados;
  }
  public function listarId($id) { // listar todos los productos
    $querySelec = "select * from producto WHERE id_producto = :id";
    // preparar la sentencia
    $stmt = $this->con->prepare($querySelec);
    $data = [
      'id' => $id,
    ];
    // ejecutar la sentencia
    $stmt->execute($data);
    // recuperar los datos (en caso de select)
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    // retornar resultados
    return $resultado;

  }


  public function insertar($nombre, $descripcion,$precio ,$imagen) {
    $sql = "INSERT INTO producto (nombre, descripcion,precio ,imagen)
    VALUES (:nombre, :descripcion,:precio, :imagen)";

    $sentencia = $this->con->prepare($sql);
    $data = [
      'nombre' => $nombre,
      'descripcion' => $descripcion,
      'precio'=>$precio,
      'imagen' => $imagen
    ];

    $sentencia->execute($data);
    if ($sentencia->rowCount() <= 0) {
      return false;
    }
    return true;
  }

  public function eliminar($id) {
    //prepare
    $sql = "delete from producto WHERE id_producto = :id";
    //now());
    //bind parameters
    $sentencia = $this->con->prepare($sql);
    $data = [
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

  public function actualizar($id,$nombre, $descripcion,$precio ) {
    //prepare
    $sql = "UPDATE producto SET nombre=:nombre,descripcion=:descripcion, precio=:precio WHERE id_producto=:id";
    //now());
    //bind parameters
    $sentencia = $this->con->prepare($sql);
    $data = [
      'id'=>$id,
      'nombre' => $nombre,
      'descripcion' => $descripcion,
      'precio'=>$precio,
      
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

}
