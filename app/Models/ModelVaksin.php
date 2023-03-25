<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelVaksin extends Model
{

    public function allData()
    {
        return $this->db->table('daftar_vaksin')
            ->orderBy('id_daftar', 'ASC')
            ->get()->getResultArray();
    }

    public function detailData($id_daftar)
    {
        return $this->db->table('daftar_vaksin')
            ->orderBy('id_daftar', 'ASC')
            ->where('id_daftar', $id_daftar)
            ->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('daftar_vaksin')->insert($data);
    }

    public function delete_data($data)
    {
        $this->db->table('daftar_vaksin')->where('id_daftar', $data['id_daftar'])->delete($data);
    }

    public function jumlah_data_vaksin()
    {
        return $this->db->table('vaksin')
            ->where('id_vaksin', 1)
            ->get()->getRowArray();
    }

    public function updateData($data)
    {
        $this->db->table('vaksin')
            ->where('id_vaksin', 1)
            ->update($data);
    }
}
