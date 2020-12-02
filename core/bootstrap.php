<?php

App::bind('config' , require 'config.php');




App::bind('database' , new  QueryBuilder(
   connection::make(App::get('config')['database'])
));









//$app = [];
//
//$app['config'] = require 'config.php';
//
//
//$app['database']
//);
