<?php

class History extends Controller
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
            $result = $this->model('Transaksi_Model')->query("SELECT * FROM transaksi WHERE asal = '$this->current_user'");

            foreach($result as $res){
                if($res['jenis'] == 1)
                    echo json_encode([
                        'id' => $res['id'],
                        'jenis transaksi' => 'Top Up',
                        'oleh' => $this->model('Users_Model')->get($this->current_user)[0]['nama'],
                        'tanggal' => date('d M Y', $res['waktu']),
                        'waktu' => date('H:i:s', $res['waktu']),
                        'nominal' => $res['nominal']
                    ]);
    
                else if($res['jenis'] == 2)
                    echo json_encode([
                        'id' => $res['id'],
                        'jenis transaksi' => 'Transfer',
                        'oleh' => $this->model('Users_Model')->get($this->current_user)[0]['nama'],
                        'tanggal' => date('d M Y', $res['waktu']),
                        'waktu' => date('H:i:s', $res['waktu']),
                        'kepada' => $this->model('Users_Model')->get($res['tujuan'])[0]['nama'],
                        'rekening' => $this->model('Users_Model')->get($res['tujuan'])[0]['rekening'],
                        'nominal' => $res['nominal']
                    ]);

                else if($res['jenis'] == 3)
                    echo json_encode([
                        'id' => $res['id'],
                        'jenis transaksi' => 'Pembayaran',
                        'oleh' => $this->model('Users_Model')->get($this->current_user)[0]['nama'],
                        'tanggal' => date('d M Y', $res['waktu']),
                        'waktu' => date('H:i:s', $res['waktu']),
                        'nominal' => $res['nominal']
                    ]);
            }
        } catch (Exception $e) {
            echo json_encode([
                'message' => $e->getMessage()
            ]);
            exit();
        }
    }
}
