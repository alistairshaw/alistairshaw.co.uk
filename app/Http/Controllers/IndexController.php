<?php namespace App\Http\Controllers;

use App\App;
use App\Http\Responses\Response;

class IndexController extends Controller {

    /**
     * @return Response
     */
    public function index()
    {
        return App::view('index', [], 'layouts/standard');
    }

}