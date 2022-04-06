<?php

class Transfer extends Controller
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
        try {
            if (!isset($_POST['rekening']) || !isset($_POST['jumlah'])) {
                http_response_code(400);
                throw new Exception('Silahkan masukkan rekening dan jumlah');
            }

            $_POST["rekening"] = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["rekening"]);
            $rekening = $_POST["rekening"];

            $result = $this->model('Users_Model')->query("SELECT id FROM user WHERE rekening = '$rekening'");
            if (!$result) {
                throw new Exception('Nomor rekening tidak valid');
            }
            $result = $result[0];
            $data = [];
            $data["saldo"] = $_POST["jumlah"];

            if ($this->model('Users_Model')->update($result["id"], $data) == -1) {
                http_response_code(500);
                throw new Exception('Transfer Gagal');
            }

            echo json_encode([
                'message' => 'Transer Berhasil'
            ]);
        } catch (Exception $e) {
            echo json_encode([
                'message' => $e->getMessage()
            ]);
            exit();
        }
    }
}
