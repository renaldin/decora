<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }

    public function index()
    {
        $data = [
            'title' => 'Login',
            'isi'   => 'v_login'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function cek_login()
    {

        $loginValid = [
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'role' => [
                'label' => 'Hak akses',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
        ];

        if ($this->validate($loginValid)) {
            //jika valid
            $role = $this->request->getPost('role');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $cek_user = $this->ModelAuth->login_user($username, $password, $role);
            if ($cek_user) {
                //jika data cocok
                session()->set('id_user', $cek_user['id_user']);
                session()->set('username', $cek_user['username']);
                session()->set('nama', $cek_user['nama_user']);
                session()->set('foto', $cek_user['foto']);
                session()->set('level', $cek_user['role']);

                return redirect()->to(base_url('beranda'));
            } else {
                //jika data tidak cocok
                session()->setFlashdata('pesan', 'Login gagal!!! Username, password atau role salah.');
                return redirect()->to(base_url('Auth/index'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/index'));
        }
    }

    public function register()
    {
        $data = [
            'title' => 'Daftar',
            'isi'   => 'v_daftar'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function cek_register()
    {

        $registerValid = [
            'nama_user' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[user.username]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada.'
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'repeatpassword' => [
                'label' => 'Confirm Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'matches'  => '{field} harus sama dengan password.'
                ],
            ],
        ];

        if ($this->validate($registerValid)) {
            //jika valid
            $data = [
                'nama_user' => $this->request->getPost('nama_user'),
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'role'  => 'User'
            ];

            $this->ModelAuth->register($data);
            session()->setFlashdata('success', 'Daftar Akun Berhasil !!!');
            return redirect()->to(base_url('Auth/index'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/register'));
        }
    }

    public function logout()
    {
        session()->remove('id_user');
        session()->remove('log');
        session()->remove('username');
        session()->remove('nama');
        session()->remove('foto');
        session()->remove('level');

        session()->setFlashdata('success', 'Logout Berhasil !!!');
        return redirect()->to(base_url('Auth/index'));
    }
}
