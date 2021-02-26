<?php
//require_once 'controllers/error.php';
//class to centralize all the app
class App {

    function __construct () {
        echo "<p>Nueva app</p>";
        //obtain the url param that always is going to be when a param is in a url (becouse it was defined like this on htaccess)
        $url = $_GET['url'];

        //break down the url to get the first part as controller referent and the second part as method to execute
            //Delete / character could be in the end of the url
            $url = rtrim($url, '/');
            //Break down each part of the url that are between / and save they into an array
            $url = explode ('/', $url);
            //var_dump($url);

        //Charge controller read at url
        $archivoController = 'controllers/' . $url[0] . '.php';
        //validate archive exits
        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controller = new $url[0]; // $url[0] == controller name

            //validate method exits and call it
            if (isset($url[1])) {
                $controller ->{$url[1]}();
            }else {
                # code...
            }
        } else { //call controller error manager
            $controller = new Error();
        }
    }
}
?>