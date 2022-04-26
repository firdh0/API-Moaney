<?php

class Transaksi_Model extends Models
{
    private $table = 'transaksi';

    public function get($id = null)
    {
        if ($id == null) {
            throw new Exception('Maaf, terdapat kesalahan internal');
        }

        $result = mysqli_query($this->koneksi, "SELECT * FROM $this->table WHERE id = '$id';");

        if (!$result) {
            throw new Exception('Data tidak ada');
        }
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function insert($data)
    {
        $jenis = htmlspecialchars($data['jenis']);
        $asal = htmlspecialchars($data['asal']);
        $tujuan = htmlspecialchars($data['tujuan']);
        $nominal = htmlspecialchars($data['nominal']);
        $waktu = time();
        $query =    "INSERT INTO $this->table VALUES
                    ('', '$jenis', '$asal', '$waktu', '$tujuan', '$nominal')
                    ;";

        mysqli_query($this->koneksi, $query);
        return mysqli_affected_rows($this->koneksi);
    }
}
