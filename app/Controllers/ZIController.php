<?php

namespace App\Controllers;


class ZIController extends BaseController
{
    public function __construct()
    {
        // Instansiasi variabel
    }

    public function index()
    {
        $data = [
            'title' => 'Dokumen ZI'
        ];
        return view('pages/zi/index', $data);
    }
}
