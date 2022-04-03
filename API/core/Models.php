<?php

class Models
{
    protected $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }

    public function query($query)
    {
        $result = mysqli_query($this->koneksi, $query);
        if (!$result) {
            echo mysqli_error($this->koneksi);
        }
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function getConn()
    {
        return $this->koneksi;
    }
}
