<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class TransportasiController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Transportasi'
        ];
        return view('admin/transportasi/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Transportasi'
        ];
        return view('admin/transportasi/add', $data);
    }
}