<?php namespace App\Http\Responses;

class HtmlResponse implements Response {

    /**
     * @var
     */
    private $html;

    /**
     * HtmlResponse constructor.
     * @param string $html
     */
    public function __construct($html)
    {
        $this->html = $html;
    }

    public function display()
    {
        echo $this->html;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->html . "\n";
    }
}