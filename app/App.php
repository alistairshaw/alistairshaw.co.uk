<?php namespace App;

use App\Http\Responses\HtmlResponse;
use App\Router\Router;
use App\Services\ViewBuilder\PHPViewBuilder;

class App {

    public static function init()
    {
        $router = new Router();
        $response = $router->load($_SERVER['REQUEST_URI']);
        $response->display();
    }

    /**
     * @param $path
     * @param array $parameters
     * @param string $layout
     * @return HtmlResponse
     */
    public static function view($path, $parameters = [], $layout = null)
    {
        $viewBuilder = new PHPViewBuilder();
        return $viewBuilder->build($path, $parameters, $layout);
    }


}