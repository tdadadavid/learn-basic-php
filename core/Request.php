<?php

class Request{

    public static function uri(){
        return Router::formatUri(trim($_SERVER['REQUEST_URI'] , '/'));
    }
}

?>>