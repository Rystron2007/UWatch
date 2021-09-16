<?php
require_once 'config/config.php';
$controller= isset($_REQUEST['controlador'])?htmlentities($_REQUEST['controlador']):CONTROLADOR_PRINCIPAL;
$accion =isset($_REQUEST['accion'])?htmlentities($_REQUEST['accion']):ACCION_PRINCIPAL;

$controller= ucwords(strtolower($controller))."Controller";

$archivoController = 'controllers/' . $controller . '.php';

if (!is_file($archivoController)) {
  $controller = CONTROLADOR_PRINCIPAL. "Controller";
  $archivoController = 'controllers/' . CONTROLADOR_PRINCIPAL . 'Controller'.'.php';
  $accion = ACCION_PRINCIPAL;
}

require_once  $archivoController;
$objetoController = new $controller();
$objetoController->$accion();

?>
