<?php
//Main controller
class Nuevo extends Controller{

    function __construct () {
        parent::__construct();
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

        $this->model->insert(['matricula' => $matricula, 'nombre'=>$nombre, 'apellido' => $apellido]);
    }
}

?>