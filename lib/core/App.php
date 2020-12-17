<?php

class App{

    public function __construct(){
        
        session_start();

        require LIB_PATH.'models.php';

        // si no se espesifica la pagina, entonces toma la pagina por defecto, "index"
        if (!isset($_GET["url"])) { 
            $url = "home";	
        }else{
            $url = $_GET["url"];
        }
        
        Plugins::load_plugins();
        themes::definir_tema();

        try {
            $action = Router::getAction($url);
    
            $controllerName = $action["controller"];
            $method = $action["method"];

            require APP_PATH."controllers/".$controllerName.".php";
    
            $controller = new $controllerName();
            $controller->$method();
    
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

?>