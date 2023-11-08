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

    public function underConstruction()
    {
        $data = [
            'title' => 'Page is Under Construction'
        ];
        return view('errors/html/under_construction', $data);
    }
}
