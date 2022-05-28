<?php

namespace App\Controllers;

class General extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halo'
        ];

        return view('member/detail-transaksi', $data);
    }

    public function bayar()
    {
        $data = [
            'title' => 'Detail'
        ];

        return view('general/bayar', $data);
    }
}
