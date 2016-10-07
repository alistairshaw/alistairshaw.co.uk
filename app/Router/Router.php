<?php namespace App\Router;

use App\Exceptions\ControllerNotFoundException;
use App\Exceptions\MethodNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Responses\Response;

class Router implements RouterInterface {

    /**
     * Pass the route and it will load the appropriate controller
     * @param string $route
     * @return Response
     */
    public function load($route)
    {
        $path = explode('/', ltrim($route, '/'));
        $controller = $this->getController((count($path) > 0) ? $path[0] : '');
        $method = $this->getMethod($controller, count($path) > 1 ? $path[1] : '');

        return $controller->$method();
    }

    /**
     * @param $controllerName
     * @return Controller
     */
    private function getController($controllerName)
    {
        if (!$controllerName) $controllerName = 'Index';
        $controllerName = ucwords($controllerName);
        $controllerName .= 'Controller';

        return $this->tryController($controllerName);
    }

    /**
     * @param $controllerName
     * @return Controller
     * @throws ControllerNotFoundException
     */
    private function tryController($controllerName)
    {
        $controllerName = '\App\Http\Controllers\\' . $controllerName;

        if (class_exists($controllerName)) return new $controllerName();
        if ($controllerName !== '\App\Http\Controllers\IndexController') return $this->tryController('IndexController');

        throw new ControllerNotFoundException('Controller ' . $controllerName . ' not found');
    }

    /**
     * @param Controller $controller
     * @param $method
     * @return string
     * @throws MethodNotFoundException
     */
    private function getMethod(Controller $controller, $method)
    {
        if ($method == '') $method = 'index';
        if (method_exists($controller, $method)) return $method;

        throw new MethodNotFoundException('Method ' . $method . ' not found on Controller ' . get_class($controller));
    }
}