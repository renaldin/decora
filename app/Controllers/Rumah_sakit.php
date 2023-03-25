<?php

namespace App\Controllers;

use App\Models\ModelRs;

class Rumah_sakit extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelRs = new ModelRs();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Rumah Sakit Rujukan',
            'rs'    => $this->ModelRs->allData(),
            'isi'   => 'rs/index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function kelola()
    {
        $data = [
            'title' => 'Kelola Rumah Sakit Rujukan',
            'rs'    => $this->ModelRs->allData(),
            'isi'   => 'rs/kelola'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = [
            'nama_rs' => $this->request->getPost('nama_rs'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'website' => $this->request->getPost('website'),
        ];

        $this->ModelRs->add($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!!');

        return redirect()->to(base_url('rumah_sakit/kelola'));
    }

    public function edit($id_rs)
    {
        $data = [
            'id_rs' => $id_rs,
            'nama_rs' => $this->request->getPost('nama_rs'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'website' => $this->request->getPost('website'),
        ];

        $this->ModelRs->edit($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate!!!');

        return redirect()->to(base_url('rumah_sakit/kelola'));
    }

    public function delete($id_rs)
    {
        $data = [
            'id_rs'   => $id_rs,
        ];

        $this->ModelRs->delete_data($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!!');

        return redirect()->to(base_url('rumah_sakit/kelola'));
    }
}
