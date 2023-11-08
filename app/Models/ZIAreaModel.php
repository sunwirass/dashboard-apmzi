<?php

namespace App\Models;

use CodeIgniter\Model;

class ZIAreaModel extends Model
{
    protected $table = 'zi_area';

    public function getPengungkitByArea($id)
    {
        $strQueryItem = "select b.id, c.name, a.slug as area_slug, c.slug as pengungkit_slug, b.url from zi_area a join zi_area_pengungkit b on a.id = b.id_area join zi_pengungkit c on c.id = b.id_pengungkit where a.id=" . $id;
        $query   = $this->db->query($strQueryItem);
        $results = $query->getResult();
        return $results;
    }
}
