<?php

namespace App\Controllers;

use App\Models\ModelBerita;

class Berita extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelBerita = new ModelBerita();
    }

    public function index()
    {
        $data = [
            'title' => 'Berita',
            'berita' => $this->ModelBerita->allData(),
            'isi'   => 'berita/index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function kelola()
    {
        $data = [
            'title' => 'Kelola Berita',
            'berita' => $this->ModelBerita->allData(),
            'isi'   => 'berita/kelola'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Berita',
            'isi'   => 'berita/add'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insert()
    {
        $beritaValid = [
            'judul_berita' => [
                'label' => 'Judul Berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'isi' => [
                'label' => 'Isi Berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'gambar' => [
                'label' => 'Gambar Berita',
                'rules' => 'uploaded[gambar]|max_size[gambar,2024]|mime_in[gambar,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 2 MB',
                    'max_size' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
        ];

        if ($this->validate($beritaValid)) {
            //jika valid
            //mengambil data foto di form
            $berita = $this->request->getFile('gambar');
            //mengganti nama 
            $namaGambar = $berita->getRandomName();
            $data = [
                'judul_berita' => $this->request->getPost('judul_berita'),
                'tanggal' => $this->request->getPost('tanggal'),
                'isi' => $this->request->getPost('isi'),
                'gambar' => $namaGambar,
            ];
            // memindahkan lokasi foto
            $berita->move('gambar_berita', $namaGambar);

            $this->ModelBerita->add($data);
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!!');

            return redirect()->to(base_url('berita/kelola'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('berita/add'));
        }
    }

    public function edit($id_berita)
    {
        $data = [
            'title' => 'Edit Berita',
            'berita' => $this->ModelBerita->detailData($id_berita),
            'isi'   => 'berita/edit'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function update($id_berita)
    {
        $beritaValid = [
            'judul_berita' => [
                'label' => 'Judul Berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal Berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'isi' => [
                'label' => 'Isi Berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'gambar' => [
                'label' => 'Gambar Berita',
                'rules' => 'uploaded[gambar]|max_size[gambar,2024]|mime_in[gambar,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 2 MB',
                    'max_size' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
        ];

        if ($this->validate($beritaValid)) {
            //jika valid
            //mengambil data foto di form
            $berita = $this->request->getFile('gambar');

            if ($berita->getError() == 4) {
                $data = [
                    'id_berita' => $id_berita,
                    'judul_berita' => $this->request->getPost('judul_berita'),
                    'tanggal' => $this->request->getPost('tanggal'),
                    'isi' => $this->request->getPost('isi'),
                ];
                $this->ModelBerita->edit($data);
            } else {
                //menghapus foto lama
                $detailBerita = $this->ModelBerita->detailData($id_berita);
                if ($detailBerita['gambar'] != "") {
                    unlink('gambar_berita/' . $detailBerita['gambar']);
                }
                //mengganti nama 
                $namaGambar = $berita->getRandomName();

                // memindahkan lokasi foto
                $berita->move('gambar_berita', $namaGambar);

                $data = [
                    'id_berita' => $id_berita,
                    'judul_berita' => $this->request->getPost('judul_berita'),
                    'tanggal' => $this->request->getPost('tanggal'),
                    'isi' => $this->request->getPost('isi'),
                    'gambar' => $namaGambar,
                ];

                $this->ModelBerita->edit($data);
            }

            session()->setFlashdata('pesan', 'Data Berhasil Diedit!!!');

            return redirect()->to(base_url('berita/kelola'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('berita/edit/' . $id_berita));
        }
    }

    public function delete($id_berita)
    {
        $data = [
            'id_berita'   => $id_berita,
        ];

        $this->ModelBerita->delete_data($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!!');

        return redirect()->to(base_url('berita/kelola'));
    }

    public function baca($id_berita)
    {
        $berita = $this->ModelBerita->detailData($id_berita);
        $data = [
            'title' => 'DACARO | ' . $berita['judul_berita'],
            'berita' => $this->ModelBerita->detailData($id_berita),
            'isi'   => 'berita/baca'
        ];
        return view('layout/v_wrapper', $data);
    }
}
