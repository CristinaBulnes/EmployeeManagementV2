<?php
//Controller base class -> with common properties and method all controller have
class Controller {
    function __construct () {
        //echo "<p>Controlador base</p>";
        $this->view = new View();
    }
//controller check what is recived from the view to work with the specifically model and return the view again 
    function loadModel ($model) {
        $url = 'models/'.$model.'model.php';

        if (file_exists($url)) {
            require $url;
            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
}
?>