<?php
//Main controller
class Main extends Controller{

    function __construct () {
        parent::__construct();
        //echo "<p>Main controller</p>";
    }

    function render () {
        $this->view->render('main/index');
    }

    function saludo () {
        echo "<p>Ejecutaste el metodo saludo</p>";
    }
}
?>