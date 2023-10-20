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

    public function pageapm()
    {
        $data = [
            'title' => 'Dokumen APM'
        ];

        return view('pages/apm', $data);
    }

    public function pagezi()
    {
        $data = [
            'title' => 'Dokumen ZI'
        ];

        return view('pages/zi', $data);
    }
}
