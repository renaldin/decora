<?php

namespace App\Controllers;

class Hubungi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Hubungi Kami',
            'isi'   => 'hubungi/index'
        ];
        return view('layout/v_wrapper', $data);
    }
}
