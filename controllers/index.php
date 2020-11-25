<?php


$results = $app['database']->selectAll('task.goals');

require 'views/index.view.php';

