<?php namespace App;

class App {

    /**
     * @param $path
     */
    public static function view($path)
    {
        include("../resources/views/" . $path . '.php');
    }

}