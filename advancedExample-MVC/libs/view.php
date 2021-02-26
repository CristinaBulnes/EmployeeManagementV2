<?php
//View base class
class View {
    function __construct () {
        //echo "<p>Vista base</p>";
    }

    function render ($nombre) { //$nombre: view you want to show
        require 'views/'.$nombre.'.php';
    }
}
?>