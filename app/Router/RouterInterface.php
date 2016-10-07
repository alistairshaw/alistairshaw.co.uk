<?php namespace App\Router;

interface RouterInterface {

    /**
     * Pass the route and it will load the appropriate controller
     * @param string $route
     * @return mixed
     */
    public function load($route);

}