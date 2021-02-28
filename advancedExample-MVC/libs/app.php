<?php

//class to centralize all the app
class App {

    function __construct () {
        //echo "<p>Nueva app</p>";
        //obtain the url param that always is going to be when a param is in a url (becouse it was defined like this on htaccess)
        $url = isset($_GET['url']) ? $_GET['url'] : null; // Check if url exits -> if not you have to charge index

        //break down the url to get the first part as controller referent and the second part as method to execute
            //Delete / character could be in the end of the url
            $url = rtrim($url, '/');
            //Break down each part of the url that are between / and save they into an array
            $url = explode ('/', $url);
            //var_dump($url);

        //Charge controller read at url or index if url is null
        if (empty($url[0])) {
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main (); // view associate is create in the construct
            $controller->loadModel('main'); //Create model associate if exits
            $controller->render();
            return false;
        }

        $archivoController = 'controllers/' . $url[0] . '.php';
        //validate archive exits
        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controller = new $url[0]; // $url[0] == controller name
            $controller->loadModel($url[0]);

            //validate if the method to call have parameters
            $nparam = sizeof($url);
            if ($nparam > 1) { //validate method exits and call it
                if ($nparam > 2) { //There is param
                    $param = [];
                    for ($i=2; $i < $nparam; $i++) { 
                        array_push($param, $url[$i]);
                    }
                    $controller ->{$url[1]}($param);
                }else {
                    $controller ->{$url[1]}();
                }
            }else { // if there is not a method to execute you will execute render
                $controller->render();
            }
        } else { //call controller error manager
            require_once 'controllers/errores.php';
            $controller = new Errores();
        }
    }
}
?>