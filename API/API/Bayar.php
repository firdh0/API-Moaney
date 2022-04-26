<?php

class Bayar extends Controller
{
    protected $current_user = 0;

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
            $data["saldo"] = $_POST["jumlah"] * -1;

            if ($data["saldo"] >= 0) {
                http_response_code(400);
                throw new Exception('Transaksi tidak valid');
            }

            if ($this->model('Users_Model')->query("SELECT saldo FROM user WHERE id = '$this->current_user'")[0]["saldo"] <  $_POST["jumlah"]) {
                http_response_code(400);
                throw new Exception('Saldo tidak mencukupi');
            }

            if ($this->model('Users_Model')->update($this->current_user, $data) == -1) {
                http_response_code(400);
                throw new Exception('Pembayaran Gagal');
            }

            $transaksi = [
                'jenis' => 3,
                'asal' => $this->current_user,
                'tujuan' => -1,
                'nominal' => $_POST["jumlah"],
            ];

            if ($this->model('Transaksi_Model')->insert($transaksi) == -1)
                throw new Exception('Terdapat masalah dalam membuat catatan');

            echo json_encode([
                'message' => 'Pembayaran Berhasil'
            ]);
        } catch (Exception $e) {
            echo json_encode([
                'message' => $e->getMessage()
            ]);
            exit();
        }
    }
}
