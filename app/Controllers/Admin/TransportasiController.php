<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class TransportasiController extends BaseController
{
    public function index()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            // Redirect to the login page if not logged in
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'Daftar Transportasi'
        ];
        return view('admin/transportasi/index', $data);
    }

    public function add()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            // Redirect to the login page if not logged in
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'Tambah Transportasi'
        ];
        return view('admin/transportasi/add', $data);
    }
}