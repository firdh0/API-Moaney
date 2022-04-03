<?php

require_once 'Helper/TokenJWT.php';

class Login extends Controller
{
    public function index()
    {
        try {
            if (!isset($_POST['email']) || !isset($_POST['password'])) {
                http_response_code(400);
                throw new Exception('Silahkan masukkan email dan password');
            }

            $email = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["email"]);
            $password = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["password"]);

            $result = $this->model('Users_Model')->query("SELECT * FROM user WHERE email = '$email'");

            if (!$result) {
                throw new Exception('Email dan Password Tidak Sesuai');
                http_response_code(200);
            }

            $result = $result[0];

            if (!password_verify($password, $result['password'])) {
                http_response_code(200);
                throw new Exception('Email dan Password Tidak Sesuai');
            }

            $payload = ['user_id' => $result['id'], 'email' => $result['email'], 'role' => $result['role']];

            $token = TokenJWT::generate($payload);
            echo json_encode([
                'status' => '1',
                'message' => 'Login Berhasil',
                'user_id' => $result['id'],
                'role' => $result['role'],
                'token' => $token
            ]);
        } catch (Exception $e) {
            echo json_encode([
                'message' => $e->getMessage()
            ]);
            exit();
        }
    }
}
