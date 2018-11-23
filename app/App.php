<?php namespace App;

use App\Exceptions\FourOhFourException;
use App\Http\Responses\HtmlResponse;
use App\Router\Router;
use App\Services\ViewBuilder\PHPViewBuilder;
use Dotenv\Dotenv;

class App {

    public static function init()
    {
        try
        {
            $dotEnv = new Dotenv(__DIR__ . '/../');
            $dotEnv->load();

            $router = new Router();
            $response = $router->load($_SERVER['REQUEST_URI']);
            $response->display();
        }
        catch (FourOhFourException $e)
        {
            exit('404');
        }
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