<?php


$results = $app['database']->selectAll('task.goals');
//var_dump($results);

require 'views/index.view.php';

