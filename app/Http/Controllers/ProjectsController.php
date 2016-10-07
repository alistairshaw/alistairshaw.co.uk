<?php namespace App\Http\Controllers;

use App\App;

class ProjectsController extends Controller {

    public function clicpoint()
    {
        $data['navSelected'] = 'projects';

        return App::view('projects/clicpoint', $data, 'layouts/standard');
    }

}