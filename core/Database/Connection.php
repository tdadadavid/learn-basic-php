<?php


class connection{

    public static function make($config){

        try {
            return new PDO(
                $config['server'].';dbname='.$config['db'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

}