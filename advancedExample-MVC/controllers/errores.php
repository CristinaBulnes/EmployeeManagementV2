<?php
//Error controller
class Errores extends Controller{

    function __construct () {
        parent::__construct();
        $this->view->mensaje = "Hubo un error";
        $this->view->render('errores/index');
        //echo "<p>Error controller</p>";
    }
}
?>