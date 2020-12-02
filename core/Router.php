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

//       var_dump($uri , $requestMethodType);

     if (array_key_exists($uri, $this->routes[$requestMethodType])) {

         return $this ->callAction(
             ... explode('@' , $this->routes[$requestMethodType][$uri])
         );
     }
     else{
            throw new Exception('route not defined for this URI');
        }
    }

    protected function callAction($controller ,  $action){

//        die(var_dump($controller , $action));

        if (! method_exists($controller , $action)){
            throw new Exception(
                "{$controller} does not respond to {$action} action"
            );
        }
        return (new $controller) ->$action();
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