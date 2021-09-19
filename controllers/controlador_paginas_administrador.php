<?php
class ControladorPaginasA{
  public $valor;

  public function __construct($valor){
        $this->valor = $valor;
  }

  public function agregarA(){
    include_once("views/administrador/agregarA.php");
  }
  public function mostrarA(){
    include_once("views/administrador/mostrarA.php");
  }
  public function editarAd(){
    include_once("views/administrador/editarA.php");
  }

  public function establecer(){
    if($this->valor=='mostrarA'){
      $this->mostrarA();
    }
    else if($this->valor=='agregarA'){
      $this->agregarA();
    }
    else{
      $this->editarAd();
    }
  }
}
?>