<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'isi'   => 'beranda'
        ];
        return view('layout/v_wrapper', $data);
    }
}
