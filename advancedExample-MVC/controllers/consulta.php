<?php
//Main controller
class Consulta extends Controller{

    function __construct () {
        parent::__construct();
        $this->view->datos = [];
    }

    function render () {
        //@@ $this->model->get() --> call this controller's model and its method get 
        $alumnos = $this->model->get();
        $this->view->datos = $alumnos;
        $this->view->render('consulta/index');
    }
}
?>