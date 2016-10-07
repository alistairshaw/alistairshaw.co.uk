<?php namespace App\Services\ViewBuilder;

interface ViewBuilder {

    /**
     * @param $path
     * @param array $parameters
     * @param null $layout
     * @return mixed
     */
    public function build($path, $parameters = [], $layout = null);

}