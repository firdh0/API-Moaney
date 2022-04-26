<?php

require_once 'Helper/TokenJWT.php';

class Register extends Controller
{
    public function index()
    {
        try {
            if (!isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['nama'])) {
                http_response_code(400);
                throw new Exception('Silahkan masukkan nama, email, dan password');
            }

            $_POST["nama"] = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["nama"]);
            $_POST["email"] = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["email"]);
            $_POST["password"] = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["password"]);

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                http_response_code(400);
                throw new Exception('Email tidak valid');
            }

            $email = $_POST["email"];
            $data = [
                'nama' => $_POST["nama"],
                'email' => $_POST["email"],
                'password' => $_POST["password"],
            ];
            if ($this->model('Users_Model')->insert($data) == -1)
                throw new Exception('Data akun gagal ditambahkan');

            $result = $this->model('Users_Model')->query("SELECT * FROM user WHERE email = '$email'");
            if (!$result) {
                throw new Exception('Data akun gagal ditambahkan');
            }

            $result = $result[0];
            $payload = ['user_id' => $result['id'], 'email' => $result['email']];

            $token = TokenJWT::generate($payload);
            echo json_encode([
                'message' => 'Register Berhasil',
                'email' => $result['email'],
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
