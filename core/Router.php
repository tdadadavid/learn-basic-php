<?php

class Router{
    protected $routes = [];


    public function define($routes){
        $this->routes = $routes;
    }

    public static function load($file){
        $router = new self();

        require $file;

        return $router;

    }


    public function direct($uri){
//        var_dump($this->routes);
//        var_dump($uri);

        if (array_key_exists($uri , $this->routes)){
            return $this->routes[$uri];
        }

        try {
            throw new Exception('route not defined for this URI');
        }catch (Exception $e){
            $e ->getMessage();
        }

    }

    public static function formatUri($uri){
        if(strstr($uri, "mypractice/")){
            $uri=  str_replace("mypractice/","",$uri);
        }else{
            $uri="";
        }
        return $uri;
    }
}