<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRs extends Model
{

    public function allData()
    {
        return $this->db->table('rs')
            ->orderBy('id_rs', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('rs')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('rs')->where('id_rs', $data['id_rs'])->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('rs')->where('id_rs', $data['id_rs'])->delete($data);
    }
}
