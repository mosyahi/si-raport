<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class KelKelasController extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Data User',
            'active' => 'kelola kelas',

        ];
        return view('pages/admin/kelola_kelas/index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Data User',
            'active' => 'kelas',

        ];
        return view('pages/admin/kelola_kelas/edit', $data);
    }
}