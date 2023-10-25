<?php

namespace App\Controllers;

use App\Models\KriteriaModel;
use App\Models\IndikatorModel;

class ApmController extends BaseController
{
    protected $kriteriaModel;
    protected $indikatorModel;

    public function __construct()
    {
        $this->kriteriaModel = new KriteriaModel();
        $this->indikatorModel = new IndikatorModel();
    }

    public function index()
    {
        $kriteria = $this->kriteriaModel->findAll();

        $data = [
            'title' => 'Dokumen APM',
            'kriteria' => $kriteria
        ];
        return view('pages/apm/index', $data);
    }

    public function kriteria($slug)
    {
        $kriteria = $this->kriteriaModel->where(['slug' => $slug])->first();
        $data = [
            'title' => 'APM - Kepemimpinan',
            'name' => $kriteria['name'],
            'indikator' => $this->indikatorModel->where(['id_kriteria' => $kriteria['id']])->findAll()
        ];

        return view('pages/apm/detil_kriteria', $data);
    }

    public function detilKriteria($slug, $order)
    {
        echo $slug . " " . $order;
    }
}
