<?php
//Main controller
class Main extends Controller{

    function __construct () {
        parent::__construct();
        $this->view->render('main/index');
        echo "<p>Main controller</p>";
    }

    function saludo () {
        echo "<p>Ejecutaste el metodo saludo</p>";
    }
}
?>