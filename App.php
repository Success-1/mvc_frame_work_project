<?php

class App
{
    private $controller = 'Home';
    private $method = 'index';

    private function splitURL(){
        $url = $_GET['url'] ?? 'home';
        $url = explode("/", trim($url, "/"));
        return $url;
    }
    
    public function loadController(){
        $url = $this->splitURL();
    
        $filename = "./core/controllers/".ucfirst($url[0]).".php";
    
        if (file_exists($filename)) {
            require $filename;
            $this->controller = ucfirst($url[0]);
        }else{
            $filename = "./core/controllers/_404.php";
            require $filename;
            $this->controller = "_404";
            
            // echo "Controller not found";
        }
        show($url);
        // show($this->controller);
        $controller = new $this->controller;
        
        // $home->index();

        // $home = new Home;
        call_user_func_array([$controller, $this->method], []);
    }
}
