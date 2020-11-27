<?php

class Router
{
    public $routes = [
        'GET' => [],

        'POST' => []

    ];

    public static function load($file)
    {
        $router = new self();

        require $file;

        return $router;
    }


    public function direct($uri , $requestMethodType)
    {

//        var_dump($uri);
//        var_dump($requestMethodType);

     if (array_key_exists($uri, $this->routes[$requestMethodType])) {
            return $this->routes[$requestMethodType][$uri];
        }else{
            throw new Exception('route not defined for this URI');
        }
    }


    public function get($uri , $controller){
        $this->routes['GET'][$uri] = $controller;
    }

    public function POST($uri , $controller){
        $this->routes['POST'][$uri] = $controller;
    }



    public static function formatUri($uri){
        if(strstr($uri, "mypractice/" ,$uri )){
            $uri=  str_replace("/mypractice/","",$uri);
        }else{
            $uri="";
        }

        return $uri;
    }

}