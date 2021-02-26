<?php
//Controller base class -> with common properties and method all controller have
class Controller {
    function __construct () {
        echo "<p>Controlador base</p>";
        $this->view = new View();
    }
}
?>