<?php

class Top_up extends Controller
{
    protected $current_user;

    public function __construct()
    {
        try {
            $this->current_user = $this->tokenAuth();
        } catch (Exception $e) {
            echo json_encode(['message' => $e->getMessage()]);
            exit();
        }
    }

    public function index()
    {
        try {
            if (!isset($_POST['jumlah'])) {
                http_response_code(400);
                throw new Exception('Silahkan masukkan jumlah');
            }

            $_POST["jumlah"] = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["jumlah"]);

            $data = [];
            $data["saldo"] = $_POST["jumlah"];

            if ($this->model('Users_Model')->update($this->current_user, $data) == -1) {
                http_response_code(500);
                throw new Exception('Top Up Gagal');
            }

            $transaksi = [
                'jenis' => 1,
                'asal' => $this->current_user,
                'tujuan' => 0,
                'nominal' => $_POST["jumlah"],
            ];

            if ($this->model('Transaksi_Model')->insert($transaksi) == -1)
                throw new Exception('Terdapat masalah dalam membuat catatan');

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
