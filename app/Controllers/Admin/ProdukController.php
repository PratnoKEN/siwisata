<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ProdukController extends BaseController
{
    public function index()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            // Redirect to the login page if not logged in
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'Daftar Produk'
        ];
        return view('admin/produk/index', $data);
    }

    public function add()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            // Redirect to the login page if not logged in
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'Tambah Destinasi'
        ];
        return view('admin/produk/add', $data);
    }
}