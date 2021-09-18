<?php
require_once 'config/config.php';
$controller= isset($_REQUEST['controlador'])?htmlentities($_REQUEST['controlador']):CONTROLADOR_SECUNDARIO;
$accion =isset($_REQUEST['accion'])?htmlentities($_REQUEST['accion']):ACCION_SECUNDARIA;

$controller= ucwords(strtolower($controller))."Controller";

$archivoController = 'controllers/' . $controller . '.php';

if (!is_file($archivoController)) {
  $controller = CONTROLADOR_SECUNDARIO. "Controller";
  $archivoController = 'controllers/' . CONTROLADOR_SECUNDARIO . 'Controller'.'.php';
  $accion = ACCION_SECUNDARIA;
}

require_once  $archivoController;
$objetoController = new $controller();
$objetoController->$accion();

?>
