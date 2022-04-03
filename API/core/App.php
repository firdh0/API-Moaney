<?php

require_once 'Helper/TokenJWT.php';

class App
{
    protected $API = 'Indexes';
    protected $parameters = [];

    public function __construct()
    {
        header('Content-Type: application/json; charset=utf8');
        $url = $this->parseURL();


        if (isset($url)) {
            if ($url[0] == 'users') $url[0] = 'Users';
            if ($url[0] == 'auth') $url[0] = 'Auth';
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

        $this->tokenAuth();

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

    public function tokenAuth()
    {

        if ($this->API != 'Auth') {
            try {
                $headers = getallheaders();

                if (!isset($headers)) {
                    throw new Exception('Silahkan masukkan token');
                }

                if (!isset($headers['Authorization'])) {
                    throw new Exception('Silahkan masukkan token');
                }
                $token = explode(' ', $headers['Authorization'])[1];
                if (!$token) {
                    throw new Exception('Silahkan masukkan token');
                }

                try {
                    $payload = TokenJWT::getData($token);
                    if (!is_string($token))
                        throw new Exception('Token tidak valid');
                } catch (Exception $e) {
                    echo json_encode(['message' => 'Token tidak valid']);
                    http_response_code(400);
                    exit();
                }

                if (empty($payload->role) || empty($payload->user_id) || empty($payload->email))
                    throw new Exception('Token tidak valid');

                if ($payload->role != 1) {
                    if (empty($this->parameters)) {
                        throw new Exception('Access Denied');
                    } else if ($this->parameters[0] != $payload->user_id) {
                        throw new Exception('Access Denied');
                    }

                    if (($_SERVER['REQUEST_METHOD'] === 'POST') || ($_SERVER['REQUEST_METHOD'] === 'DELETE'))
                        throw new Exception('Access Denied');
                }
            } catch (Exception $e) {
                echo json_encode(['message' => $e->getMessage()]);
                http_response_code(401);
                exit();
            }
        }
    }
}
