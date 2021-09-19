<?php
  function conexion(){
    return mysqli_connect('localhost:3307','root','','desarrolloweb');
  }
  $conexion=conexion();
  $sql="SELECT nombre, descripcion, precio FROM producto";
  $resultado=mysqli_query($conexion,$sql);
  $datos =mysqli_fetch_all($resultado,MYSQLI_ASSOC);
  echo json_encode($datos);
  
?> 



