<?php

namespace App\Models;

use CodeIgniter\Model;

class APMIndikatorModel extends Model
{
    protected $table = 'apm_indikator';

    public function getAssessmentByIndikator($id_indikator)
    {
        $strQueryItem = "select a.name as responsible from apm_assessment a join apm_indikator_assessment b on a.id = b.id_assessment join apm_indikator c on c.id = b.id_indikator where c.id=" . $id_indikator;
        $query   = $this->db->query($strQueryItem);
        $results = $query->getResult();
        return $results;
    }
}
