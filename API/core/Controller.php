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

            if (empty($payload->user_id) || empty($payload->email))
                throw new Exception('Token tidak valid');
        } catch (Exception $e) {
            echo json_encode(['message' => $e->getMessage()]);
            http_response_code(401);
            exit();
        }
    }
}
