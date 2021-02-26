<?php

class Ayuda extends Controller {
    function __construct () {
        parent::__construct();
        $this->view->mensaje = "Help section";
        $this->view->render('ayuda/index');
    }
}
?>