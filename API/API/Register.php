<?php

require_once 'Helper/TokenJWT.php';

class Register extends Controller
{
    public function index()
    {
        try {
            if (!isset($_POST['email']) || !isset($_POST['password'])) {
                http_response_code(400);
                throw new Exception('Silahkan masukkan email dan password');
            }

            $_POST["email"] = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["email"]);
            $_POST["password"] = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["password"]);

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                http_response_code(400);
                throw new Exception('Email tidak valid');
            }

            $email = $_POST["email"];
            if (!$this->model('Users_Model')->insert($_POST))
                throw new Exception('Data akun gagal ditambahkan');

            $result = $this->model('Users_Model')->query("SELECT * FROM user WHERE email = '$email'");

            $result = $result[0];
            $payload = ['user_id' => $result['id'], 'email' => $result['email'], 'role' => $result['role']];

            $token = TokenJWT::generate($payload);
            echo json_encode([
                'status' => '1',
                'message' => 'Register Berhasil',
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
