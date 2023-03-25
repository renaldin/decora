<?php

namespace App\Controllers;

use App\Models\ModelInfografis;

class Infografis extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelInfografis = new ModelInfografis();
    }

    public function index()
    {
        $data = [
            'title' => 'Infografis',
            'galeri' => $this->ModelInfografis->allData(),
            'isi'   => 'infografis/index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function kelola()
    {
        $data = [
            'title' => 'Kelola Infografis',
            'galeri' => $this->ModelInfografis->allData(),
            'isi'   => 'infografis/kelola'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Add Infografis',
            'isi'   => 'infografis/add'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insert()
    {
        $galeriValid = [
            'nama_galeri' => [
                'label' => 'Nama Foto',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'galeri' => [
                'label' => 'Foto',
                'rules' => 'uploaded[galeri]|max_size[galeri,2024]|mime_in[galeri,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 2 MB',
                    'max_size' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
        ];

        if ($this->validate($galeriValid)) {
            //jika valid
            //mengambil data foto di form
            $galeri = $this->request->getFile('galeri');
            //mengganti nama 
            $namaGaleri = $galeri->getRandomName();

            $data = [
                'nama_galeri' => $this->request->getPost('nama_galeri'),
                'galeri' => $namaGaleri,
            ];
            // memindahkan lokasi foto
            $galeri->move('foto_galeri', $namaGaleri);

            $this->ModelInfografis->add($data);
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!!');

            return redirect()->to(base_url('infografis/kelola'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('infografis/add'));
        }
    }

    public function edit($id_galeri)
    {
        $data = [
            'title' => 'Edit Foto',
            'galeri' => $this->ModelInfografis->detailData($id_galeri),
            'isi'   => 'infografis/edit'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function update($id_galeri)
    {
        $galeriValid = [
            'nama_galeri' => [
                'label' => 'Nama Foto',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'galeri' => [
                'label' => 'Foto',
                'rules' => 'uploaded[galeri]|max_size[galeri,2024]|mime_in[galeri,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 2 MB',
                    'max_size' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
        ];

        if ($this->validate($galeriValid)) {
            //jika valid
            //mengambil data foto di form
            $galeri = $this->request->getFile('galeri');

            if ($galeri->getError() == 4) {
                $data = [
                    'id_galeri' => $id_galeri,
                    'nama_galeri' => $this->request->getPost('nama_galeri'),
                ];
                $this->ModelInfografis->edit($data);
            } else {
                //menghapus foto lama
                $detailGaleri = $this->ModelInfografis->detailData($id_galeri);
                if ($detailGaleri['galeri'] != "") {
                    unlink('foto_galeri/' . $detailGaleri['galeri']);
                }
                //mengganti nama 
                $namaGaleri = $galeri->getRandomName();

                // memindahkan lokasi foto
                $galeri->move('foto_galeri', $namaGaleri);

                $data = [
                    'id_galeri' => $id_galeri,
                    'nama_galeri' => $this->request->getPost('nama_galeri'),
                    'galeri' => $namaGaleri,
                ];

                $this->ModelInfografis->edit($data);
            }

            session()->setFlashdata('pesan', 'Data Berhasil Diedit!!!');

            return redirect()->to(base_url('infografis/kelola'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('infografis/edit/' . $id_galeri));
        }
    }

    public function delete($id_galeri)
    {
        $data = [
            'id_galeri'   => $id_galeri,
        ];

        $this->ModelInfografis->delete_data($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!!');

        return redirect()->to(base_url('infografis/kelola'));
    }
}
