<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfil extends Model
{

    public function allData($id_user)
    {
        return $this->db->table('user')
            ->where('id_user', $id_user)
            ->get()->getRowArray();
    }

    public function detail_data($id_user)
    {
        return $this->db->table('user')
            ->where('id_user', $id_user)
            ->get()->getRowArray();
    }

    public function edit($data)
    {
        $this->db->table('user')->where('id_user', $data['id_user'])->update($data);
    }
}
