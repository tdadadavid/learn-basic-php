<?php


class pagesController{

    public function home(){

//        die('home');
        $results = App::get('database')->selectAll('task.goals');


        require 'views/index.view.php';

    }

    public function about(){

        require 'views/about.views.php';

    }

    public function contact(){
        require 'views/contact.views.php';
    }

    public function aboutCulture(){
        require 'views/about-culture.views.php';
    }

}









