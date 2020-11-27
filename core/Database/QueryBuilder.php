<?php

class QueryBuilder{
    public $pdo;


    public function __construct(PDO $pdo){

    $this->pdo = $pdo;

    }


    function selectAll($table){

        $statement = $this->pdo->prepare("select * from {$table}");

        $statement -> execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public  function updateTable($table){

            $name = $_POST['name'];
            $description = $_POST['description'];
            $status = $_POST['status'];

            $statement = $this ->pdo->prepare( "INSERT into {$table} VALUES ('$name' , '$description' , '$status')");

            $statement -> execute();

            return $statement ->fetchAll( PDO::FETCH_OBJ);
    }














}