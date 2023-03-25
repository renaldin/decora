<?php

namespace App\Controllers;

use App\Models\ModelProfil;

class Profil extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelProfil = new ModelProfil();
    }

    public function index()
    {
        $id_user = session()->get('id_user');
        $data = [
            'title' => 'Profil Anda',
            'profil' => $this->ModelProfil->allData($id_user),
            'isi'   => 'profil/index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function edit($id_user)
    {
        $data = [
            'title' => 'Edit Profil',
            'profil' => $this->ModelProfil->detail_data($id_user),
            'isi'   => 'profil/edit'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function update($id_user)
    {
        $userValid = [
            'nama_user' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
        ];

        if ($this->validate($userValid)) {
            //jika valid
            //mengambil data foto di form
            $foto = $this->request->getFile('foto');

            if ($foto->getError() == 4) {
                $data = [
                    'id_user' => $id_user,
                    'nama_user' => $this->request->getPost('nama_user'),
                    'username' => $this->request->getPost('username'),
                    'password' => $this->request->getPost('password'),
                ];
                $this->ModelProfil->edit($data);
            } else {
                //menghapus foto lama
                $detailFoto = $this->ModelProfil->detail_data($id_user);
                if ($detailFoto['foto'] != "") {
                    unlink('foto/' . $detailFoto['foto']);
                }
                //mengganti nama 
                $namaFoto = $foto->getRandomName();

                // memindahkan lokasi foto
                $foto->move('foto', $namaFoto);

                $data = [
                    'id_user' => $id_user,
                    'nama_user' => $this->request->getPost('nama_user'),
                    'username' => $this->request->getPost('username'),
                    'password' => $this->request->getPost('password'),
                    'foto' => $namaFoto,
                ];

                $this->ModelProfil->edit($data);
            }

            session()->setFlashdata('pesan', 'Data Profil Berhasil Diedit!!!');

            return redirect()->to(base_url('profil'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('profil/edit/' . $id_user));
        }
    }
}
