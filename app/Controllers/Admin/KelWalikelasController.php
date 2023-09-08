<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class KelWalikelasController extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Data User',
            'active' => 'kelola walikelas',

        ];
        return view('pages/admin/kelola_walikelas/index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Data User',
            'active' => 'walikelas',

        ];
        return view('pages/admin/kelola_walikelas/edit', $data);
    }
}