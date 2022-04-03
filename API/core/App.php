<?php

class App
{
    protected $API = 'Indexes';
    protected $parameters = [];

    public function __construct()
    {
        header('Content-Type: application/json; charset=utf8');
        $url = $this->parseURL();
        ucwords($url[0]);

        if (isset($url)) {
            if (file_exists("API/$url[0].php")) {
                $this->API = $url[0];
                unset($url[0]);
            } else
                unset($url[0]);

            if (!empty($url) && ($_SERVER['REQUEST_METHOD'] === 'POST')) {
                echo json_encode([
                    'status' => '-1',
                    'message' => 'URL tidak valid'
                ]);
                exit();
            }

            if (!empty($url)) {
                $this->parameters[] = $url[1];
                unset($url[1]);
            }

            if (!empty($url)) {
                echo json_encode([
                    'status' => '-1',
                    'message' => 'URL tidak valid'
                ]);
                exit();
            }
        }

        try {
            require_once "API/$this->API.php";
            $this->API = new $this->API;
            call_user_func_array([$this->API, 'index'], $this->parameters);
        } catch (Exception $e) {
            echo json_encode([
                'status' => '-1',
                'message' => $e->getMessage()
            ]);
        }
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
