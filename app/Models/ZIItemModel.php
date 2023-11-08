<?php

namespace App\Models;

use CodeIgniter\Model;

class ZIItemModel extends Model
{
    protected $table = 'zi_item';

    public function getItemByAreaPengungkit($aspekId)
    {
        $strQueryItem = "SELECT a.* FROM zi_item a JOIN zi_komponen b ON b.id = a.id_komponen WHERE b.id_area_pengungkit =" . $aspekId;
        $query   = $this->db->query($strQueryItem);
        $results = $query->getResult();
        return $results;
    }
}
