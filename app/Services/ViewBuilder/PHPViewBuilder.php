<?php namespace App\Services\ViewBuilder;

use App\Http\Responses\HtmlResponse;

class PHPViewBuilder implements ViewBuilder {

    /**
     * @param $path
     * @param array $parameters
     * @param null $layout
     * @return mixed
     */
    public function build($path, $parameters = [], $layout = null)
    {
        if ($layout)
        {
            $parameters['content'] = $this->get_include_contents("../resources/views/" . $path . '.php', $parameters);
            return new HtmlResponse($this->get_include_contents("../resources/views/" . $layout . '.php', $parameters));
        }
        return new HtmlResponse($this->get_include_contents("../resources/views/" . $path . '.php', $parameters));
    }

    /**
     * @param $filename
     * @param $parameters
     * @return bool|string
     */
    private function get_include_contents($filename, $parameters)
    {
        if (is_file($filename))
        {
            ob_start();
            extract($parameters);
            include $filename;
            $contents = ob_get_contents();
            ob_end_clean();
            return $contents;
        }
        return false;
    }
}