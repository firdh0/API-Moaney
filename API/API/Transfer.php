<?php

class Transfer extends Controller
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
            if (!isset($_POST['rekening']) || !isset($_POST['jumlah'])) {
                http_response_code(400);
                throw new Exception('Silahkan masukkan rekening dan jumlah');
            }

            $_POST["rekening"] = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["rekening"]);
            $_POST["jumlah"] = mysqli_real_escape_string($this->model('Users_Model')->getConn(), $_POST["jumlah"]);
            $rekening = $_POST["rekening"];

            $asal = $this->model('Users_Model')->query("SELECT id, saldo FROM user WHERE id = '$this->current_user'");
            $tujuan = $this->model('Users_Model')->query("SELECT id FROM user WHERE rekening = '$rekening'");
            
            if ($_POST['jumlah'] <= 0) {
                http_response_code(400);
                throw new Exception('Transaksi Tidak Valid');
            }

            if (!$tujuan) {
                http_response_code(400);
                throw new Exception('Nomor rekening tidak valid');
            }
            $tujuan = $tujuan[0];

            if ($asal) $asal = $asal[0];

            if (($asal['id'] == $tujuan['id'])) {
                http_response_code(400);
                throw new Exception('Transaksi Tidak Valid');
            }

            if ($asal['saldo'] < $_POST['jumlah']) {
                http_response_code(400);
                throw new Exception('Saldo tidak mencukupi');
            }

            $data = [];
            $data["saldo"] = $_POST["jumlah"];

            if ($this->model('Users_Model')->update($tujuan["id"], $data) == -1) {
                http_response_code(400);
                throw new Exception('Transfer Gagal');
            }

            $transaksi = [
                'jenis' => 2,
                'asal' => $this->current_user,
                'tujuan' => $tujuan['id'],
                'nominal' => $_POST["jumlah"],
            ];

            if ($this->model('Transaksi_Model')->insert($transaksi) == -1)
                throw new Exception('Terdapat masalah dalam membuat catatan');

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
