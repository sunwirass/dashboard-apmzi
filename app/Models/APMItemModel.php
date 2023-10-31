<?php

namespace App\Models;

use CodeIgniter\Model;

$db = \Config\Database::connect();

class APMItemModel extends Model
{
    protected $table = 'apm_item';

    public function getItemByIndikator($id_indikator)
    {
        $strQueryItem = "SELECT * FROM item WHERE id_indikator=" . $id_indikator;
        $query   = $this->db->query($strQueryItem);
        $results = $query->getResult();
        return $results;
    }
}
