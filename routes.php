<?php

// skeletal structure of thr routes file
// router -> POST_TYPE (URI , "controller file")

$router -> get('' , 'pagesController@home' );
$router -> get('about' , 'pagesController@about');
$router -> GET('contact' , 'pagesController@contact');
$router -> GET('about/culture' , 'pagesController@aboutCulture');
$router -> POST('name' , 'add-name');


//var_dump($router->routes);