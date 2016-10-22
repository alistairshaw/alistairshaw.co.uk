<?php namespace App\Http\Controllers;

use App\App;

class TechController extends Controller {

    public function index()
    {
        $data['navSelected'] = 'technology';

        return App::view('tech/index', $data, 'layouts/standard');
    }
}