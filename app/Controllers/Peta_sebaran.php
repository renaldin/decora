<?php

namespace App\Controllers;

class Peta_sebaran extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Peta Sebaran',
            'isi'   => 'peta_sebaran/index'
        ];
        return view('layout/v_wrapper', $data);
    }
}
