<?php
//require  'core/Database/QueryBuilder.php';

//var_dump($_POST);
//$app['database']->insertIntoTable($_POST);

 if(isset($_POST['submit'])){
//     var_dump($_POST);
     if(App::get('database')->insertIntoTable('task.goals')){
         echo "Successfully Added";
     }else{
         echo "Failed";
     }
//    $result = $insertIntoTable(($app['database']));
 }



