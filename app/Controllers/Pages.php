<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];

        return view('pages/home', $data);
    }

    public function mainZI()
    {
        $data = [
            'title' => 'Dokumen ZI'
        ];

        return view('pages/zi/index', $data);
    }
}
