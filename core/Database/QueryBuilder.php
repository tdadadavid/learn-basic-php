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

    function insertIntoTable($table){

            $description = $_POST['description'];
            $status = $_POST['status'];

//            var_dump($_POST);
//            var_dump($table);

            $statement = $this ->pdo->prepare( "INSERT into {$table} (description, status) VALUES (?, ?)");

            return $statement->execute([$description, $status]);
    }














}