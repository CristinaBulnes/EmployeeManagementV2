<?php
//Main controller
class Nuevo extends Controller{

    function __construct () {
        parent::__construct();
        $this->view->mensaje = "";
        //echo "<p>Nuevo controller</p>";
    }

    function render () {
        $this->view->render('nuevo/index');
    }

    function registrarAlumno () {
        //get data and call the model
        $matricula = $_POST['matricula'];
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];

        $mensaje = "";
        if ($this->model->insert(['matricula' => $matricula, 'nombre'=>$nombre, 'apellido' => $apellido])) {
            $mensaje = "Nuevo alumno creado";
            $this->view->mensaje = $mensaje;
            $this->render();
        } else {
            $mensaje = "Error";
            $this->view->mensaje = $mensaje;
            $this->render();
        }
    }
}

?>