<?php
//Main controller
class Nuevo extends Controller{

    function __construct () {
        parent::__construct();
        $this->view->render('nuevo/index');
        //echo "<p>Main controller</p>";
    }

    function registrarAlumno () {
        //get data and call the model
        echo "Alumno creado";
        $this->model->insert();
    }
}

?>