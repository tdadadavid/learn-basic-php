<?php
//require  'core/Database/QueryBuilder.php';

//var_dump($_POST);
//$app['database']->insertIntoTable($_POST);

 if(isset($_POST['submit'])){
//     var_dump($_POST);
     if($app['database']->insertIntoTable('task.goals')){
         echo "Successfully Added";
     }else{
         echo "Failed";
     }
//    $result = $insertIntoTable(($app['database']));
 }



