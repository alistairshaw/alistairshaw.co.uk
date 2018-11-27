<?php namespace App\Http\Controllers;

use App\App;

class ProjectsController extends Controller {

    public function index()
    {
        $data['navSelected'] = 'projects';

        return App::view('projects/index', $data, 'layouts/standard');
    }

    public function campus()
    {
        $data['navSelected'] = 'projects';

        return App::view('projects/campus', $data, 'layouts/standard');
    }

    public function clicpoint()
    {
        $data['navSelected'] = 'projects';

        return App::view('projects/clicpoint', $data, 'layouts/standard');
    }

    public function vendirun()
    {
        $data['navSelected'] = 'projects';

        return App::view('projects/vendirun', $data, 'layouts/standard');
    }

    public function hygge()
    {
        $data['navSelected'] = 'projects';

        return App::view('projects/hygge', $data, 'layouts/standard');
    }

    public function emedicus()
    {
        $data['navSelected'] = 'projects';

        return App::view('projects/emedicus', $data, 'layouts/standard');
    }

    public function vkp()
    {
        $data['navSelected'] = 'projects';

        return App::view('projects/vkp', $data, 'layouts/standard');
    }

    public function boomslang()
    {
        $data['navSelected'] = 'projects';

        return App::view('projects/boomslang', $data, 'layouts/standard');
    }

}