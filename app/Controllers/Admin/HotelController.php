<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class HotelController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Hotel'
        ];
        return view('admin/hotel/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Hotel'
        ];
        return view('admin/hotel/add', $data);
    }
}