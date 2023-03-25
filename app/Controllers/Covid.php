<?php

namespace App\Controllers;

use App\Models\ModelCovid;

class Covid extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelCovid = new ModelCovid();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Covid',
            'jumlah' => $this->ModelCovid->jumlah(),
            'isi'   => 'covid/index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function deteksi()
    {
        $data = [
            'title' => 'Deteksi Mandiri',
            'isi'   => 'covid/deteksi'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function deteksi_mandiri()
    {
        $deteksiValis = [
            'demam' => [
                'label' => 'Judul Berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'batuk' => [
                'label' => 'Tanggal Berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'sesak' => [
                'label' => 'Isi Berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'nyeri_tenggorokan' => [
                'label' => 'Isi Berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'lama_penyakit' => [
                'label' => 'Isi Berita',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
        ];

        if ($this->validate($deteksiValis)) {
            //jika valid
            $demam = $this->request->getPost('demam');
            $batuk = $this->request->getPost('batuk');
            $sesak = $this->request->getPost('sesak');
            $nyeri_tenggorokan = $this->request->getPost('nyeri_tenggorokan');
            $lama_penyakit = $this->request->getPost('lama_penyakit');

            if ($demam == 'Ya' && $batuk == 'Ya' && $sesak == 'Ya' && $nyeri_tenggorokan == 'Ya' && $lama_penyakit == 'Ya') {
                $data = [
                    'title' => 'Deteksi Mandiri',
                    'isi'   => 'covid/gejala'
                ];
                return view('layout/v_wrapper', $data);
            } elseif ($demam == 'Ya' && $batuk == 'Tidak' && $sesak == 'Ya' && $nyeri_tenggorokan == 'Ya' && $lama_penyakit == 'Ya') {
                $data = [
                    'title' => 'Deteksi Mandiri',
                    'isi'   => 'covid/gejala'
                ];
                return view('layout/v_wrapper', $data);
            } elseif ($demam == 'Ya' && $batuk == 'Ya' && $sesak == 'Ya' && $nyeri_tenggorokan == 'Tidak' && $lama_penyakit == 'Ya') {
                $data = [
                    'title' => 'Deteksi Mandiri',
                    'isi'   => 'covid/gejala'
                ];
                return view('layout/v_wrapper', $data);
            } elseif ($demam == 'Ya' && $batuk == 'Ya' && $sesak == 'Tidak' && $nyeri_tenggorokan == 'Ya' && $lama_penyakit == 'Ya') {
                $data = [
                    'title' => 'Deteksi Mandiri',
                    'isi'   => 'covid/gejala'
                ];
                return view('layout/v_wrapper', $data);
            } else {
                $data = [
                    'title' => 'Deteksi Mandiri',
                    'isi'   => 'covid/tidak_gejala'
                ];
                return view('layout/v_wrapper', $data);
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('pesan', 'Data gejala yang dirasakan harus diisi semua!!!');

            return redirect()->to(base_url('covid/deteksi'));
        }
    }

    public function print_tidak_gejala()
    {

        $data = [
            'title' => 'Print Deteksi Mandiri',
        ];

        return view('covid/print_tidak_gejala', $data);
    }

    public function print_gejala()
    {

        $data = [
            'title' => 'Print Deteksi Mandiri',
        ];

        return view('covid/print_gejala', $data);
    }

    public function kelola()
    {
        $data = [
            'title' => 'Kelola Data Covid',
            'jumlah' => $this->ModelCovid->jumlah(),
            'isi'   => 'covid/kelola'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function update()
    {
        $data = [
            'id_covid' => 1,
            'KASUS_COVID_19_POSITIF' => $this->request->getPost('KASUS_COVID_19_POSITIF'),
            'KASUS_COVID_19_POSITIF_Luar_Kota_dirawat_di_Blora' => $this->request->getPost('KASUS_COVID_19_POSITIF_Luar_Kota_dirawat_di_Blora'),
            'COVID_19_POSITIF_DIRAWAT_RS' => $this->request->getPost('COVID_19_POSITIF_DIRAWAT_RS'),
            'COVID_19_POSITIF_DIRAWAT_RS_Luar_Blora' => $this->request->getPost('COVID_19_POSITIF_DIRAWAT_RS_Luar_Blora'),
            'COVID_19_POSITIF_ISOLASI_MANDIRI' => $this->request->getPost('COVID_19_POSITIF_ISOLASI_MANDIRI'),
            'COVID_19_POSITIF_ISOLASI_MANDIRI_Luar_Blora' => $this->request->getPost('COVID_19_POSITIF_ISOLASI_MANDIRI_Luar_Blora'),
            'SEMBUH' => $this->request->getPost('SEMBUH'),
            'SEMBUH_Luar_Kota_dirawat_di_Blora' => $this->request->getPost('SEMBUH_Luar_Kota_dirawat_di_Blora'),
            'MENINGGAL' => $this->request->getPost('MENINGGAL'),
            'MENINGGAL_Luar_Kota_dirawat_di_Blora' => $this->request->getPost('MENINGGAL_Luar_Kota_dirawat_di_Blora'),
            'PEMERIKSAAN_SWAB' => $this->request->getPost('PEMERIKSAAN_SWAB'),
        ];

        $this->ModelCovid->updateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate!!!');

        return redirect()->to(base_url('covid/kelola'));
    }
}
