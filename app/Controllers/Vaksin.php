<?php

namespace App\Controllers;

use App\Models\ModelVaksin;

class Vaksin extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelVaksin = new ModelVaksin();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Vaksin',
            'jumlah' => $this->ModelVaksin->jumlah_data_vaksin(),
            'isi'   => 'vaksin/index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function kelola()
    {
        $data = [
            'title' => 'Kelola Pendaftaran Vaksin',
            'vaksin' => $this->ModelVaksin->allData(),
            'isi'   => 'vaksin/kelola'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function pendaftaran()
    {
        $data = [
            'title' => 'Pendaftaran Vaksin',
            'isi'   => 'vaksin/pendaftaran'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function daftar()
    {
        $vaksinValid = [
            'nik' => [
                'label' => 'NIK',
                'rules' => 'required|is_unique[daftar_vaksin.nik]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada.'
                ]
            ],
            'nama_lengkap' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'telepon' => [
                'label' => 'Nomor Telepon',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'jenis_vaksin' => [
                'label' => 'Jenis Vaksin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'dosis' => [
                'label' => 'Dosis',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
        ];

        if ($this->validate($vaksinValid)) {
            //jika valid
            $data = [
                'nik' => $this->request->getPost('nik'),
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'alamat' => $this->request->getPost('alamat'),
                'telepon' => $this->request->getPost('telepon'),
                'jenis_vaksin' => $this->request->getPost('jenis_vaksin'),
                'dosis' => $this->request->getPost('dosis'),
                'tanggal' => $this->request->getPost('tanggal'),
            ];

            $this->ModelVaksin->add($data);
            session()->setFlashdata('pesan', 'Anda Berhasil Melakukan Pendaftaran Vaksin!!!');

            return redirect()->to(base_url('vaksin/pendaftaran'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('vaksin/pendaftaran'));
        }
    }

    public function detail($id_daftar)
    {
        $data = [
            'title' => 'Detail Data Vaksin',
            'vaksin' => $this->ModelVaksin->detailData($id_daftar),
            'isi'   => 'vaksin/detail'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function delete($id_daftar)
    {
        $data = [
            'id_daftar'   => $id_daftar,
        ];

        $this->ModelVaksin->delete_data($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!!');

        return redirect()->to(base_url('vaksin/kelola'));
    }

    public function kelola_data_vaksin()
    {
        $data = [
            'title' => 'Kelola Data Vaksin',
            'jumlah' => $this->ModelVaksin->jumlah_data_vaksin(),
            'isi'   => 'vaksin/kelola_data_vaksin'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function update()
    {
        $data = [
            'id_vaksin' => 1,
            // sasaran
            'sasaran_remaja' => $this->request->getPost('sasaran_remaja'),
            'sasaran_umum' => $this->request->getPost('sasaran_umum'),
            'sasaran_nakes' => $this->request->getPost('sasaran_nakes'),
            'sasaran_publik' => $this->request->getPost('sasaran_publik'),
            'sasaran_lansia' => $this->request->getPost('sasaran_lansia'),
            'sasaran_bumil' => $this->request->getPost('sasaran_bumil'),
            // vaksinasi
            'vaksin_nakes_dosis1' => $this->request->getPost('vaksin_nakes_dosis1'),
            'vaksin_nakes_dosis2' => $this->request->getPost('vaksin_nakes_dosis2'),
            'vaksin_nakes_dosis3' => $this->request->getPost('vaksin_nakes_dosis3'),
            'vaksin_pelayan_publik_dosis1' => $this->request->getPost('vaksin_pelayan_publik_dosis1'),
            'vaksin_pelayan_publik_dosis2' => $this->request->getPost('vaksin_pelayan_publik_dosis2'),
            'vaksin_lansia_dosis1' => $this->request->getPost('vaksin_lansia_dosis1'),
            'vaksin_lansia_dosis2' => $this->request->getPost('vaksin_lansia_dosis2'),
            'vaksin_masyarakat_umum_dosis1' => $this->request->getPost('vaksin_masyarakat_umum_dosis1'),
            'vaksin_masyarakat_umum_dosis2' => $this->request->getPost('vaksin_masyarakat_umum_dosis2'),
            'vaksin_remaja_dosis1' => $this->request->getPost('vaksin_remaja_dosis1'),
            'vaksin_remaja_dosis2' => $this->request->getPost('vaksin_remaja_dosis2'),
            'vaksin_bumil_dosis1' => $this->request->getPost('vaksin_bumil_dosis1'),
            'vaksin_bumil_dosis2' => $this->request->getPost('vaksin_bumil_dosis2'),
            'vaksin_disabilitas_dosis1' => $this->request->getPost('vaksin_disabilitas_dosis1'),
            'vaksin_disabilitas_dosis2' => $this->request->getPost('vaksin_disabilitas_dosis2'),
            'vaksin_anak_dosis1' => $this->request->getPost('vaksin_anak_dosis1'),
            'vaksin_anak_dosis2' => $this->request->getPost('vaksin_anak_dosis2'),
        ];

        $this->ModelVaksin->updateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate!!!');

        return redirect()->to(base_url('vaksin/kelola_data_vaksin'));
    }
}
