<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCovid extends Model
{

    public function jumlah()
    {
        return $this->db->table('covid')
            ->where('id_covid', 1)
            ->get()->getRowArray();
    }

    public function detailJumlahCovid()
    {
        return $this->db->table('covid')
            ->where('id_covid', 1)
            ->get()->getRowArray();
    }

    public function updateData($data)
    {
        $this->db->table('covid')
            ->where('id_covid', 1)
            ->update($data);
    }
}
