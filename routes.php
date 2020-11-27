<?php

// skeletal structure of thr routes file
// router -> POST_TYPE (URI , "controller file")

$router -> get('' , 'controllers/index.php' );
$router -> get('about' , 'controllers/about.php');
$router -> POST('name' , 'controllers/add-name.php');
$router -> GET('about/culture' , 'controllers/about-culture.php');


//var_dump($router->routes);