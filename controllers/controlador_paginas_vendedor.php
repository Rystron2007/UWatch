<?php
class ControladorPaginas{
  public $valor;

  public function __construct($valor){
        $this->valor = $valor;
  }

  public function agregar(){
    include_once("views/vendedor/agregar.php");
  }
  public function mostrar(){
    include_once("views/vendedor/mostrar.php");
  }
  public function editar(){
    include_once("views/vendedor/editar.php");
  }

  public function establecer(){
    if($this->valor=='mostrar'){
      $this->mostrar();
    }
    else if($this->valor=='agregar'){
      $this->agregar();
    }
    else{
      $this->editar();
    }
  }
}
?>