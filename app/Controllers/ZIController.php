<?php

namespace App\Controllers;

use App\Models\ZIAreaModel;
use App\Models\ZIKomponenModel;
use App\Models\ZIItemModel;
use App\Models\ZIAreaPengungkitModel;

class ZIController extends BaseController
{
    protected $areaModel;
    protected $komponenModel;
    protected $itemModel;
    protected $aspekModel;

    public function __construct()
    {
        $this->areaModel = new ZIAreaModel();
        $this->komponenModel = new ZIKomponenModel();
        $this->itemModel = new ZIItemModel();
        $this->aspekModel = new ZIAreaPengungkitModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dokumen ZI'
        ];
        return view('pages/zi/index', $data);
    }
    public function pengungkitByArea($slug)
    {
        $area = $this->areaModel->where(['slug' => $slug])->first();
        $pengungkit = $this->areaModel->getPengungkitByArea($area['id']);
        $data = [
            'title' => 'ZI - ' . $area['name'],
            'area' => $area,
            'pengungkit' => $pengungkit
        ];
        return view('pages/zi/detil_area', $data);
    }

    public function itemByAreaPengungkit($area, $aspekId)
    {
        $aspek_name = "";
        if ($aspekId % 2 == 0) {
            $aspek_name = "Reform";
        } else {
            $aspek_name = "Pemenuhan";
        }

        $aspek = $this->aspekModel->where(['id' => $aspekId])->first();
        $area = $this->areaModel->where(['slug' => $area])->first();
        $komponen = $this->komponenModel->where(['id_area_pengungkit' => $aspekId])->findAll();
        $item_list = $this->itemModel->getItemByAreaPengungkit($aspekId);
        $data = [
            'title' => 'ZI - ' . $area['name'],
            'area' => $area,
            'komponen' => $komponen,
            'item_list' => $item_list,
            'aspek_name' => $aspek_name,
            'aspek' => $aspek
        ];
        return view('pages/zi/detil_item', $data);
    }
}
