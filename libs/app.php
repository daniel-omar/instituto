<?php
require_once "controllers/errorpage.php";
class App{
    function __construct(){
        // echo "<p>Nueva app</p>";

        $url=isset($_GET['url']) ? $_GET['url']:null;
        $url=rtrim($url,'/');
        $url=explode('/',$url);

        // var_dump($url);
        if(empty($url[0])){
            $archivoController='controllers/main.php';
            require_once $archivoController;
            $controller=new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }else{
            $archivoController='controllers/'.$url[0].'.php';
        
            if(file_exists($archivoController)){
                require_once $archivoController;
                $controller=new $url[0];
                $controller->loadModel($url[0]);

                if(isset($url[1])){
                    $controller->{$url[1]}();
                }else{
                    $controller->render();
                }
            }else{
                $controller=new ErrorPage();    
            }
        }

        
        
    }
}

?>