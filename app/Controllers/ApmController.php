<?php

namespace App\Controllers;

use App\Models\APMKriteriaModel;
use App\Models\APMIndikatorModel;
use App\Models\APMItemModel;

class ApmController extends BaseController
{
    protected $kriteriaModel;
    protected $indikatorModel;
    protected $itemModel;

    public function __construct()
    {
        $this->kriteriaModel = new APMKriteriaModel();
        $this->indikatorModel = new APMIndikatorModel();
        $this->itemModel = new APMItemModel();
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

    // Menampilkan checklist (indikator terkait) dari setiap kriteria
    public function indikatorByKriteria($slug)
    {
        $kriteria = $this->kriteriaModel->where(['slug' => $slug])->first();
        $data = [
            'title' => 'APM - ' . $kriteria['name'],
            'kriteria' => $kriteria,
            'indikator' => $this->indikatorModel->where(['id_kriteria' => $kriteria['id']])->findAll()
        ];

        return view('pages/apm/detil_indikator', $data);
    }

    // Menampilkan item-item dari setiap checklist (indikator)
    public function itemByIndikator($slug, $order)
    {
        $indikator = $this->indikatorModel->where(['checklist_order' => $order])->first();
        $assessment_list = $this->indikatorModel->getAssessmentByIndikator($order);
        $item_list = $this->itemModel->getItemByIndikator($order);
        $kriteria = $this->kriteriaModel->where(['id' => $indikator['id_kriteria']])->first();

        $data = [
            'title' => 'APM - Checklist No. ' . $order,
            'kriteria_name' => $kriteria['name'],
            'checklist_order' => $order,
            'indikator' => $indikator,
            'assessment_list' => $assessment_list,
            'item_list' => $item_list
        ];

        return view('pages/apm/detil_item', $data);
    }
}
