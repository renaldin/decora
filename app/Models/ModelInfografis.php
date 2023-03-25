<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInfografis extends Model
{

    public function allData()
    {
        return $this->db->table('galeri')
            ->orderBy('id_galeri', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('galeri')->insert($data);
    }

    public function detailData($id_galeri)
    {
        return $this->db->table('galeri')
            ->where('id_galeri', $id_galeri)
            ->get()->getRowArray();
    }

    public function edit($data)
    {
        $this->db->table('galeri')->where('id_galeri', $data['id_galeri'])->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('galeri')->where('id_galeri', $data['id_galeri'])->delete($data);
    }
}
