<?php

class Bayar extends Controller
{
    protected $current_user = 0;

    public function __construct()
    {
        try {
            global $current_user;
            $current_user = $this->tokenAuth();
        } catch (Exception $e) {
            echo json_encode(['message' => $e->getMessage()]);
            exit();
        }
    }

    public function index()
    {
        global $current_user;
        try {
            if (!isset($_POST['jumlah'])) {
                http_response_code(400);
                throw new Exception('Silahkan masukkan jumlah');
            }

            $_POST["jumlah"] = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["jumlah"]);

            $data = [];
            $data["saldo"] = $_POST["jumlah"] * -1;

            if ($this->model('Users_Model')->query("SELECT saldo FROM user WHERE id = '$current_user'")[0]["saldo"] <  $_POST["jumlah"]) {
                http_response_code(400);
                throw new Exception('Saldo tidak mencukupi');
            }

            if ($this->model('Users_Model')->update($current_user, $data) == -1) {
                http_response_code(500);
                throw new Exception('Top Up Gagal');
            }

            echo json_encode([
                'message' => 'Top Up Berhasil'
            ]);
        } catch (Exception $e) {
            echo json_encode([
                'message' => $e->getMessage()
            ]);
            exit();
        }
    }
}
