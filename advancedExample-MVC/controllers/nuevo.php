<?php
//Main controller
class Nuevo extends Controller{

    function __construct () {
        parent::__construct();
        $this->view->render('nuevo/index');
        //echo "<p>Nuevo controller</p>";
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