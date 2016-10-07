<?php namespace App\Router;

use App\Exceptions\FourOhFourException;

interface RouterInterface {

    /**
     * Pass the route and it will load the appropriate controller
     * @param string $route
     * @return mixed
     * @throws FourOhFourException
     */
    public function load($route);

}