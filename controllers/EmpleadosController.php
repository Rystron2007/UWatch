<?php

require_once 'models/EmpleadosModel.php';

class EmpleadosController {

    private $model;

    public function __construct() {
        $this->model = new EmpleadosModel();
    }

    // funcion del controlador
    public function index() {
        //llamar al modelo, obtener los  datos que me da el modelo
        $resultados = $this->model->listar();
        // llamar a la vista (incluir la vista)
        require_once 'views/productos/listaempleadoView.php';
    }

    public function nuevo() {
        // llamar a la vista
        require_once 'views/productos/empleadoNuevoView.php';
    }

    public function agregar() {
        // leer parametros
        $nombre_completo = htmlentities($_POST['nombre_completo']);
        $sueldo = htmlentities($_POST['sueldo']);
        $cargo = htmlentities($_POST['cargo']);

        //llamar al modelo
        $exito = $this->model->insertar($nombre_completo, $sueldo, $cargo);
        $msj = 'Producto guardado exitosamente';
        $color = 'primary';
        if (!$exito) {
            $msj = "No se pudo realizar el guardado";
            $color = "danger";
        }
        session_start();
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;

        //llamar a la vista
        header('Location:index.php?c=empleados&a=index');
    }

}
