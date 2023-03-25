<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBerita extends Model
{

    public function allData()
    {
        return $this->db->table('berita')
            ->orderBy('tanggal', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('berita')->insert($data);
    }

    public function detailData($id_berita)
    {
        return $this->db->table('berita')
            ->where('id_berita', $id_berita)
            ->get()->getRowArray();
    }

    public function edit($data)
    {
        $this->db->table('berita')->where('id_berita', $data['id_berita'])->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('berita')->where('id_berita', $data['id_berita'])->delete($data);
    }
}
