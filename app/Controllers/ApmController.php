<?php

namespace App\Controllers;

class ApmController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dokumen APM'
        ];

        return view('pages/apm', $data);
    }

    public function kepemimpinan()
    {
        $data = [
            'title' => 'APM - Kepemimpinan'
        ];

        return view('pages/apm/kepemimpinan', $data);
    }

    public function manpro()
    {
        $data = [
            'title' => 'APM - Manajemen Proses'
        ];

        return view('pages/apm/manpro', $data);
    }

    public function renstra()
    {
        $data = [
            'title' => 'APM - Rencana Strategis'
        ];

        return view('pages/apm/renstra', $data);
    }

    public function msdm()
    {
        $data = [
            'title' => 'APM - Pengelolaan Sumber Daya'
        ];

        return view('pages/apm/msdm', $data);
    }

    public function kinerja()
    {
        $data = [
            'title' => 'APM - Hasil Kinerja'
        ];

        return view('pages/apm/kinerja', $data);
    }

    public function kwlayanan()
    {
        $data = [
            'title' => 'APM - Kualitas Layanan'
        ];

        return view('pages/apm/kwlayanan', $data);
    }

    public function dokumentasi()
    {
        $data = [
            'title' => 'APM - Dokumentasi/Arsip'
        ];

        return view('pages/apm/dokumentasi', $data);
    }
}
