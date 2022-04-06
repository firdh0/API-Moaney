<?php

require_once 'Helper/TokenJWT.php';

class Controller
{
    protected function model($model)
    {
        require_once "models/$model.php";
        return new $model;
    }

    protected function tokenAuth()
    {
        $headers = getallheaders();

        if (!isset($headers)) {
            http_response_code(400);
            throw new Exception('Silahkan masukkan token');
        }

        if (!isset($headers['Authorization'])) {
            http_response_code(400);
            throw new Exception('Silahkan masukkan token');
        }

        $token = explode(' ', $headers['Authorization'])[1];

        if (!$token) {
            http_response_code(400);
            throw new Exception('Silahkan masukkan token');
        }

        $payload = TokenJWT::getData($token);

        if (!is_string($token)) {
            http_response_code(400);
            throw new Exception('Token tidak valid');
        }

        if (empty($payload->user_id) || empty($payload->email)) {
            http_response_code(401);
            throw new Exception('Token tidak valid');
        }

        $result = $this->model('Users_Model')->query("SELECT id FROM user WHERE id = '$payload->user_id'");
        if (!$result) {
            http_response_code(401);
            throw new Exception('Token tidak valid');
        }

        return $payload->user_id;
    }
}
