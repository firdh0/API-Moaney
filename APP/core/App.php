<?php

class App
{
    protected $controller = 'Welcome';
    protected $method = 'index';
    protected $parameters = [];

    public function __construct()
    {
        $url = $this->parseURL();

        if (isset($url) && file_exists("controllers/$url[0].php")) {
            $this->controller = $url[0];
            unset($url[0]);

            if (isset($url[1])) {
                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }

                if (!empty($url)) {
                    $this->parameters = array_values($url);
                }
            }
        }

        require_once "controllers/$this->controller.php";
        $this->controller = new $this->controller;

        call_user_func_array([$this->controller, $this->method], $this->parameters);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
