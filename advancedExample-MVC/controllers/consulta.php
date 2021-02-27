<?php
//Main controller
class Consulta extends Controller{

    function __construct () {
        parent::__construct();
        //echo "<p>Main controller</p>";
    }

    function render () {
        $this->view->render('consulta/index');
    }
}
?>