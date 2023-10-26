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
        return view('errors/html/production');
    }
}
